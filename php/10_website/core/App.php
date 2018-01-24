<?php

namespace website\core;

use Exception;

class App
{
    const CONTROLLERS_NS = 'website\\controllers\\';

    private static $router;
    private static $dbConnection;

    public static function run($uri)
    {
        session_start();

        Config::load();

        self::$router = new Router($uri);

        self::$dbConnection = new DbConnection(
            Config::get('db_host'),
            Config::get('db_user'),
            Config::get('db_pass'),
            Config::get('db_name')
        );

        $controller = self::$router->getController();
        $controllerClass = self::CONTROLLERS_NS . ucfirst(strtolower($controller)).'Controller';

        $action = self::$router->getAction();
        $controllerAction = strtolower($action);

        $controllerObject = new $controllerClass();

        if (method_exists($controllerObject, $controllerAction)) {
            $viewPath = $controllerObject->$controllerAction();
            $viewObject = new View($controllerObject->getData(), $viewPath);
            $content = $viewObject->render();
        } else {
            throw new Exception('Method '.$controllerAction.' of class '.$controllerClass.' does not exist');
        }

        $layoutPath = View::VIEWS_PATH . DS . Config::get('layout') . '.php';
        $layoutViewObject = new View(['content' => $content], $layoutPath);

        echo $layoutViewObject->render();
    }

    public static function getRouter()
    {
        return self::$router;
    }

    public static function getDbConnection()
    {
        return self::$dbConnection;
    }
}