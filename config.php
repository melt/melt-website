<?php
/**
 * Contains the configuration for this application.
 *
 * Melt Framework configuration options are named constants that resides in the
 * namespace \melt\$MODULE\config where $MODULE is the module that uses the
 * configuration option.
 *
 * Melt Framework will automatically insert missing directives into this file
 * so don't be suprised when it starts editing itself.
 */

namespace melt\internal {
    /** Pass the names of non core modules to include to this function. */
    modules_using();
}

namespace melt\core\config {
    const CONSOLE_MOTD = 'Greetings. Welcome to Melt framework. We hope you enjoy this unix-ish console. Run "install" if you have not done so yet!';
    const NO_MAINTENANCE_CONTROLLERS = '';
    const PHP_BINARY = 'php';
    const SESSION_ENFORCE_HTTPS = false;
    const SESSION_DOMAIN = NULL;
    const DEFAULT_LANGUAGE = 'en';
    const DISPLAY_DEVMODE_NOTICE = true;
    const DOWN_MESSAGE = '';
    const IGNORE_64_BIT_WARNING = false;
    const TRANSLATION_MIN_Q = 0.4;
    const TRANSLATION_ENABLED = false;
    const PEAR_AUTOLOAD = false;
    const ERROR_LOG = NULL;
    const FORCE_ERROR_FLAGS = false;
    const FORCE_ERROR_DISPLAY = false;
    const MAINTENANCE_MODE = true;
    const DEVELOPER_KEY = 'd36fdbb270fb';
}


namespace melt\db\config {
    const STORAGE_ENGINE = 'innodb';
    const USE_TRIGGER_SEQUENCING = true;
    const PREFIX = '';
    const NAME = 'u10006_meltwb';
    const PASSWORD = '8bddbbeab8799416';
    const USER = 'u10006_meltwb';
    const PORT = 3306;
    const HOST = '127.0.0.1';
    const REQUEST_LEVEL_TRANSACTIONALITY = true;
    const DEBUG_QUERY_BENCHMARK = false;
}


namespace melt\js\config {
    const INCLUDE_LESS_CSS = true;
    const INCLUDE_JQUERY_RESIZE = true;
    const INCLUDE_JQUERY_FORM = true;
    const INCLUDE_JQUERY_COOKIE = true;
    const INCLUDE_JQUERY_AUTORESIZE = true;
    const INCLUDE_JQUERY_AUTOCOMPLETE = true;
    const INCLUDE_JQUERY_DATATABLES = true;
    const INCLUDE_JQUERY_LIGHTBOX = true;
    const INCLUDE_JQUERY_CORNER = true;
    const INCLUDE_JQUERY_ALERTS = true;
    const JQUERY_UI_THEME = 'ui-lightness';
}


namespace melt\mail\config {
    const SPOOL_RETRY_INTERVAL_SECONDS = 300;
    const SMTP_AUTH_PASSWORD = 'password';
    const SMTP_AUTH_USER = 'user';
    const SMTP_AUTH_ENABLE = false;
    const SMTP_TLS_ENABLE = false;
    const SMTP_FROM_HOST = NULL;
    const SMTP_TIMEOUT = 10;
    const SMTP_PORT = 25;
    const SMTP_HOST = 'localhost';
    const FROM_ADDRESS = '';
    const FROM_NAME = '';
}


namespace melt\userx\config {
    const LAST_DENY_AUTOREDIRECT = true;
    const SHELL_LOGIN = false;
    const MULTIPLE_GROUPS = false;
    const MULTIPLE_IDENTITIES = false;
    const HASHING_ALGORITHM = 'crypt';
    const SOFT_403 = false;
    const REMEMBER_ME_DAYS = 356;
    const SESSION_TIMEOUT_MINUTES = false;
}
