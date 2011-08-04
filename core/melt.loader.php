<?php namespace melt\internal;

/**
 * Returns an array of all availible modules.
 * Mapped MODULE_NAME => array(MODULE_CLASSNAME, MODULE_PATH)
     */
function get_all_modules() {
    static $modules = null;
    // Return result if cached.
    if ($modules !== null)
        return $modules;
    // Scan modules.
    $modules = array();
    $app_modules = @scandir(APP_DIR . "/modules");
    if (!is_array($app_modules))
        $app_modules = array();
    foreach ($app_modules as $module) {
        if ($module[0] === ".")
            continue;
        $modules[$module] = array("melt\\$module\\" . underline_to_cased($module) . "Module", APP_DIR . "/modules/$module");
    }
    foreach (scandir(APP_CORE_DIR) as $module) {
        if ($module[0] === "." || is_file($module))
            continue;
        $modules[$module] = array("melt\\$module\\" . underline_to_cased($module) . "Module", APP_CORE_DIR . "/$module");
    }
    return $modules;
}

/**
* Converts class names to identifyers.
*/
function cased_to_underline($text) {
    return strtolower(preg_replace('#([a-z0-9])([A-Z])#', '\1_\2', $text));
}

/**
* Converts identifyers to class names.
*/
function underline_to_cased($text) {
    $tokens = explode("_", $text);
    foreach ($tokens as &$token)
        $token = ucfirst($token);
    return implode($tokens);
}


function create_blank_override_class($path, $class, $extends) {
    $pos = strrpos($class, '\\');
    if ($pos === false)
        development_crash("dboc_missing_namespace", array("path" => $path, "class_name" => $class));
    $namespace = substr($class, 0, $pos);
    $class = substr($class, $pos + 1);
    $pos = strrpos($extends, '\\');
    if ($pos === false)
        development_crash("dboc_missing_namespace", array("path" => $path, "class_name" => $extends));
    $extends = substr($extends, $pos + 1);
    $file_data = "<?php namespace $namespace;\n/* Auto generated empty class override. */\n\n\nclass $class extends $extends {\n\t\n}\n";
    if (!is_dir(dirname($path)))
        mkdir(dirname($path), 0775, true);
    if (file_exists($path))
        development_crash("dboc_filesystem_conflict", array("path" => $path));
    file_put_contents($path, $file_data);
}

function check_require_prefix($path, $module_name) {
    // Validate required file prefix.
    $prefix = $module_name == ""? "<?php namespace melt;": "<?php namespace melt\\$module_name;";
    $h = \fopen($path, "r");
    $found = \fread($h, \strlen($prefix));
    if ($found != $prefix)
        development_crash("invalid_prefix", array("path" => $path, "prefix" => $prefix, "found" => $found));
    \fclose($h);
}

/**
 * The Melt Framework internal autoload function.
 * Its function are determined by the naming rules of
 * Melt Framework applications/modules.
 */
function autoload($name) {
    $parts = explode("\\", $name);
    // Valid Melt Framework classes are located in the melt namespace.
    if ($parts[0] != "melt")
        return false;
    $part_cnt = count($parts);
    if ($part_cnt == 1 || $part_cnt > 3)
        // Not Melt Framework.
        return false;
    else if (($part_cnt >= 2 && $parts[1] == "") || ($part_cnt == 3 && $parts[2] == ""))
        // Invalid.
        return false;
    $pending_app_override = false;
    // When finding a class it has too look in a maximum of 8 places.
    for ($i = 0; $i < 3; $i++) {
        if ($i == 0) {
            // Application level.
            if ($part_cnt == 3)
                continue;
            // Class name may not contain underscore. (invalid and won't load)
            if (strpos($parts[1], "_") !== false)
                continue;
            $path = APP_DIR;
            $subdir = "";
            $module_name = "";
            $file_name = $parts[1];
            $class_name = "melt\\" . ucfirst($parts[1]);
            $app_overridable_declarable = false;
        } else if ($i == 1) {
            // Module.
            if ($part_cnt == 2)
                return false;
            // Class name may not contain underscore. (invalid and won't load)
            if (strpos($parts[2], "_") !== false)
                return false;
            $modules = get_all_modules();
            $module_name = $parts[1];
            if (!isset($modules[$module_name]))
                return false;
            $path = $modules[$module_name][1];
            $subdir = "";
            $file_name = $parts[2];
            $class_name = "melt\\" . $parts[1] . "\\" . ucfirst($parts[2]);
            $app_overridable_declarable = true;
        } else if ($i == 2) {
            // Application level module extention.
            $path = APP_DIR;
            $subdir = $parts[1] . "/";
            $file_name = $parts[2];
            $class_name = "melt\\" . $parts[1] . "\\" . ucfirst($parts[2]);
            $app_overridable_declarable = false;
        }
        $required_app_override = false;
        $file_name = cased_to_underline($file_name);
        // Using Melt Framework naming rules to find the class.
        if (\melt\string\ends_with($class_name, "Controller")) {
            $path .= "/controllers/" . $subdir . substr($file_name, 0, -11) . "_controller.php";
            $must_extend = 'melt\AppController';
        } else if (\melt\string\ends_with($class_name, "Type")) {
            $path .= "/types/" . $subdir . substr($file_name, 0, -5) . "_type.php";
            $must_extend = 'melt\AppType';
        } else if (\melt\string\ends_with($class_name, "Model")) {
            $path .= "/models/" . $subdir . substr($file_name, 0, -6) . "_model.php";
            $must_extend = 'melt\AppModel';
            // Model declared in modules is required to be app overridable.
            $required_app_override = $app_overridable_declarable;
        } else if (\melt\string\ends_with($class_name, "Module")) {
            // Application and application extentions may not have
            // classes ending with "Module".
            if ($i != 1)
                return false;
            // Check that the classname is correct.
            $module_name = strtolower($parts[1]);
            if ($name != 'melt\\' . $module_name . '\\' . underline_to_cased($module_name) . 'Module')
                return false;
            $path .= "/" . $subdir . "module.php";
            $must_extend = 'melt\Module';
            $app_overridable_declarable = false;
        } else {
            $path .= "/classes/" . $subdir . $file_name . ".php";
            $must_extend = null;
        }
        if (!is_file($path)) {
            if (!$pending_app_override)
                continue;
            // Did not find application override, create a blank one.
            create_blank_override_class($path, $class_name, $class_ao_name);
        }
        if ($pending_app_override)
            // This is an application override, must extend the _app_overrideable declared class.
            $must_extend = $class_ao_name;
        if (\melt\core\config\MAINTENANCE_MODE)
            check_require_prefix($path, $module_name);
        require $path;
        if ($required_app_override) {
            $class_ao_name = $class_name . "_app_overrideable";
            if (!(class_exists($class_name) && \melt\core\is_abstract($class_name)) && !class_exists($class_ao_name))
                development_crash("invalid_module_model", array("path" => $path, "expected_name" => $class_name));
        }
        if (!class_exists($class_name) && !interface_exists($class_name)) {
            $trigger_error = true;
            if ($app_overridable_declarable) {
                // Might be declared _app_overrideable.
                $class_ao_name = $class_name . "_app_overrideable";
                if (class_exists($class_ao_name) || interface_exists($class_ao_name)) {
                    if (!\melt\core\is_abstract($class_ao_name))
                        development_crash("ao_must_be_abstract", array("path" => $path, "class_name" => $class_ao_name));
                    // For further validation.
                    $class_name = $class_ao_name;
                    $pending_app_override = true;
                    $trigger_error = false;
                    $required_app_override = false;
                }
            }
            if ($trigger_error)
                development_crash("invalid_class_name", array("path" => $path, "expected_name" => $class_name));
        }
        if (\melt\core\config\MAINTENANCE_MODE) {
            // Also check case sensitivity.
            if (!in_array($class_name, get_declared_classes()) && !in_array($class_name, get_declared_interfaces()))
                development_crash("invalid_class_name", array("path" => $path, "expected_name" => $class_name));
        }
        if ($must_extend !== null && !is_subclass_of($class_name, $must_extend))
            development_crash("invalid_parent_class", array("path" => $path,  "class_name" => $class_name, "must_extend" => $must_extend));
        if ($pending_app_override)
            continue;
        return true;
    }
}

function get_all_classes($class_type, $class_folder, $include_abstract, $id_module_separator) {
    static $class_cache = array();
    if (isset($class_cache[$class_type]))
        return $class_cache;
    // Locate and sync all models in all enabled modules.
    $model_paths = array("" => APP_DIR . "/$class_folder");
    foreach (get_all_modules() as $module_name => $module_params) {
        list($class, $path) = $module_params;
        $model_paths[$module_name] = $path . "/$class_folder";
    }
    $classes = array();
    $file_suffix = $class_type != ""? "_$class_type": "";
    foreach ($model_paths as $module_name => $model_path) {
        $model_filenames = \melt\core\grep($model_path, null, false);
        foreach ($model_filenames as $model_filename) {
            $table_name = \substr($model_filename, 0, - \strlen($file_suffix) - \strlen(".php"));
            $class_name = \melt\string\underline_to_cased($table_name);
            if ($module_name !== "") {
                $class_name = $module_name . "\\" . $class_name;
                $table_name = $module_name . $id_module_separator . $table_name;
            }
            $class_name = "melt\\" . $class_name . \ucfirst($class_type);
            // Expect model to be declared after require.
            if (!\class_exists($class_name) && !\interface_exists($class_name)) {
                if ($class_type == "")
                    $class_type = "class";
                \trigger_error("Found $class_type file that didn't declare it's expected $class_type: $class_name", \E_USER_ERROR);
            }
            if (!$include_abstract && \melt\core\is_abstract($class_name))
                continue;
            $classes[$table_name] = $class_name;
        }
    }
    $class_cache[$class_type] = $classes;
    return $classes;
}

/**
 * The Melt Framework internal autoload function for pear classes.
 */
function pear_autoload($name) {
    $path = APP_DIR . "/vendors/pear/" . str_replace("_", "/", $name) . ".php";
    if (\file_exists($path)) {
        require $path;
        return true;
    } else
        return false;
}

\call_user_func(function() {
    // Registers autoload function.
    \spl_autoload_register("melt\internal\autoload");
    // Register pear autoload function if used.
    if (\melt\core\config\PEAR_AUTOLOAD) {
        \spl_autoload_register("melt\internal\pear_autoload");
        // Some pear classes include stuff themselves and requires include path to be set.
        \set_include_path(get_include_path() . PATH_SEPARATOR . APP_DIR . "/vendors/pear/");
    }
    // Include the API's of all modules and configure them.
    foreach (get_all_modules() as $module_name => $module_parameters) {
        $module_path = $module_parameters[1];
        // Include module api.
        $path = "$module_path/api.php";
        if (\is_file($path)) {
            if (\melt\core\config\MAINTENANCE_MODE)
                check_require_prefix($path, $module_name);
            require $path;
        }
        // Configure module.
        $mod_cfg_path = $module_path . "/config.php";
        if (\is_file($mod_cfg_path)) {
            $config_directives = require($mod_cfg_path);
            if (!\is_array($config_directives))
                \trigger_error("The file '$mod_cfg_path' did not return an array as expected!", \E_USER_ERROR);
            foreach ($config_directives as $config_var_name => $default_value) {
                $config_var_fqn = "melt\\$module_name\\config\\$config_var_name";
                put_configuration_directive($config_var_fqn, $default_value);
            }
        }
    }
    // Run imports for all modules.
    $import_code = array("" => "namespace melt;");
    foreach (get_all_modules() as $target_module_name => $target_module_parameters) {
        // Import functions from module to other namespaces.
        $module_path = $target_module_parameters[1];
        $path = "$module_path/imports.php";
        if (!\is_file($path))
            continue;
        $imports = require($path);
        if (!\is_array($imports))
            \trigger_error("Import file at $path did not return an import declaration array as expected!", \E_USER_ERROR);
        foreach ($imports as $alias => $function) {
            $target_function_name = "melt\\$target_module_name\\$function";
            if (!\function_exists($target_function_name))
                \trigger_error("Function $target_function_name referenced by $target_module_name module imports is not declared!", \E_USER_ERROR);
            // Plain import or alias?
            $function_alias = \is_integer($alias)? $function: $alias;
            // Import to all modules with this function alias undeclared.
            $forward = "function $function_alias(){return \\call_user_func_array('$target_function_name',\\func_get_args());}";
            $import_code[""] .= $forward;
            foreach (get_all_modules() as $source_module_name => $source_module_parameters) {
                $source_function_name = "melt\\$source_module_name\\$function_alias";
                if (\function_exists($source_function_name))
                    continue;
                if (!isset($import_code[$source_module_name]))
                    $import_code[$source_module_name] = "namespace melt\\$source_module_name;";
                $import_code[$source_module_name] .= $forward;
            }
        }
    }
    // Evaluate import statements to populate symbol table.
    foreach ($import_code as $code)
        eval($code);
    // Include application specifyers.
    foreach(array(
    array('\melt\AppController', '\melt\Controller', 'app_controller.php'),
    array('\melt\AppModel', '\melt\Model', 'app_model.php'),
    array('\melt\AppType', '\melt\Type', 'app_type.php')) as $app_include) {
        list($class, $base, $file) = $app_include;
        $path = APP_DIR . "/" . $file;
        if (is_file($path)) {
            require $path;
        } else {
            $class_primary = substr($class, 6);
            eval("namespace melt; abstract class $class_primary extends $base {}");
        }
        if (!class_exists($class))
             development_crash("invalid_class_name", array("path" => $path, "expected_name" => $class));
        else if (!is_subclass_of($class, $base))
             development_crash("invalid_parent_class", array("path" => $path,  "class_name" => $class, "must_extend" => $base));
        else if (!\melt\core\is_abstract($class))
             development_crash("must_be_abstract", array("path" => $path,  "class_name" => $class));
    }
});