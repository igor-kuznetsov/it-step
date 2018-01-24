<?php

use website\core\App as App;

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

spl_autoload_register(function ($className) {
    $className = ltrim($className, '\\');
    $className = str_replace('website\\', '', $className);
    $className = str_replace('\\', DS, $className);
    $classPath = ROOT . DS . $className . '.php';

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