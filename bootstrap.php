<?php
define('IMPRESS_START', microtime(true));

define("ROOT", dirname(__FILE__));
define("CONFIG_DIR", ROOT . DIRECTORY_SEPARATOR . "config");
define("APP_DIR", ROOT . DIRECTORY_SEPARATOR . "app" . DIRECTORY_SEPARATOR . "App");
define("CRON_DIR", ROOT . DIRECTORY_SEPARATOR . "app" . DIRECTORY_SEPARATOR . "Cron");
define("HTTP_DIR", ROOT . DIRECTORY_SEPARATOR . "app" . DIRECTORY_SEPARATOR . "Http");
define("DATA_DIR", ROOT . DIRECTORY_SEPARATOR . "data");
define("LOG_DIR", DATA_DIR . DIRECTORY_SEPARATOR . "log");
define("PID_DIR", DATA_DIR . DIRECTORY_SEPARATOR . "pid");
define("CACHE_DIR", DATA_DIR . DIRECTORY_SEPARATOR . "cache");

require_once ROOT . DIRECTORY_SEPARATOR . "vendor/autoload.php";

// require config|env files
$dotenv = new \Dotenv\Dotenv(CONFIG_DIR);
$dotenv->load();

if (boolval(getenv("DEBUG_DISPLAY_ERRORS"))) {
    ini_set("display_errors", 1);
    error_reporting(E_ALL);
}

if (!date_default_timezone_set(getenv("TIMEZONE"))) {
    ini_set("date.timezone", getenv("TIMEZONE"));
}
