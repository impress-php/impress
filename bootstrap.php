<?php
define("ROOT", dirname(__FILE__));
define("CONFIG_DIR", ROOT . DIRECTORY_SEPARATOR . "config");
define("APP_DIR", ROOT . DIRECTORY_SEPARATOR . "app" . DIRECTORY_SEPARATOR . "App");
define("CRON_DIR", ROOT . DIRECTORY_SEPARATOR . "app" . DIRECTORY_SEPARATOR . "Cron");
define("HTTP_DIR", ROOT . DIRECTORY_SEPARATOR . "app" . DIRECTORY_SEPARATOR . "Http");
define("LOG_DIR", ROOT . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "log");
define("CACHE_DIR", ROOT . DIRECTORY_SEPARATOR . "data" . DIRECTORY_SEPARATOR . "cache");
define("DEBUG", 0);

if (DEBUG === 1) {
    ini_set("display_errors", 1);
    error_reporting(E_ALL);
}

require_once ROOT . DIRECTORY_SEPARATOR . "vendor/autoload.php";

// require config|env files
$dotenv = new \Dotenv\Dotenv(CONFIG_DIR);
$dotenv->load();
