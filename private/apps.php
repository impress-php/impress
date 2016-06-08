<?php
require_once dirname(__FILE__) . "/../" . "bootstrap.php";

if ($argc === 1) {
    echo("Error: please choice a app." . PHP_EOL);
    print_app_dir_files();
} else {
    $f = $argv[1];
    define("APP_NAME", $f);

    $f = APP_DIR . DIRECTORY_SEPARATOR . $f;

    if (is_dir($f)) {
        $f .= DIRECTORY_SEPARATOR . "main.php";
    } else if (!is_file($f)) {
        $f .= ".php";
    }

    if (!is_file($f)) {
        echo("Error: app file '$f' can not found." . PHP_EOL . PHP_EOL);
        print_app_dir_files();
        exit;
    }

    $argv[0] = $f;
    unset($argv[1]);
    $argv = array_values($argv);
    require_once $f;
}

function print_app_dir_files()
{
    $h = opendir(APP_DIR);

    $file = true;
    $files = [];
    while ($file !== false) {
        $file = readdir($h);
        (!in_array($file, ['.', '..'])) && $files[] = $file;
    }

    foreach ($files as $f) {
        echo str_replace(".php", "", $f) . PHP_EOL;
    }
}