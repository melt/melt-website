<?php
/**
 * This file is should contain your local, environment specific configuration.
 * Put all all of those here here (like MySQL configuration)
 * and make sure to ignore this file in your versioning system if you are
 * using one.
 * 
 * Any configuration directives here override those in config.php
 * because it is loaded before it.
 */

namespace melt\core\config {
    const MAINTENANCE_MODE = true;
    const DEVELOPER_KEY = 'd36fdbb270fb';    
}

namespace melt\db\config {
    const STORAGE_ENGINE = 'innodb';
    const USE_TRIGGER_SEQUENCING = true;
    const HOST = 'localhost';
    const NAME = 'melt-website';
    const PASSWORD = 'wunderbaum';
    const USER = 'root';
    const PORT = 3306;
    const PREFIX = '';
}
