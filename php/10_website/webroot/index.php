<?php

use core\App as App;

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

spl_autoload_register(function ($className) {
    $classPath = ROOT . DS . str_replace('\\', DS, ltrim($className, '\\')) . '.php';

    if (file_exists($classPath)) {
        require_once $classPath;
    } else {
        throw new Exception('Failed to load class: ' . $className);
    }
});

try {
    App::run($_SERVER['REQUEST_URI']);
} catch (Exception $ex) {
    echo 'App exception: '.$ex->getMessage();
}