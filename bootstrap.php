<?php
define('IMPRESS_START', microtime(true));
define("IMPRESS_PHP_ROOT_PATH", dirname(__FILE__));
require_once IMPRESS_PHP_ROOT_PATH . DIRECTORY_SEPARATOR . "vendor/autoload.php";

// require config|env files
$dotenv = new \Dotenv\Dotenv(config_path());
$dotenv->load();

if (boolval(env("DEBUG_DISPLAY_ERRORS", 0))) {
    ini_set("display_errors", 1);
    error_reporting(E_ALL);
}

if ($TIMEZONE = getenv("TIMEZONE")) {
    if (!date_default_timezone_set($TIMEZONE)) {
        ini_set("date.timezone", $TIMEZONE);
    }
}
