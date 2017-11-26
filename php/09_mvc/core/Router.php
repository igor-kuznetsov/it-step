<?php

namespace core;

class Router
{
    private $uri;
    private $controller;
    private $action;
    private $params;

    public function __construct($uri)
    {
        $this->uri = urldecode(trim($uri, '/'));

        $this->controller = Config::get('default_controller');
        $this->action = Config::get('default_action');

        $uriParts = explode('?', $this->uri);
        $path = $uriParts[0];
        $pathParts = explode('/', $path);

        if (count($pathParts)) {
            if (current($pathParts)) {
                $this->controller = strtolower(current($pathParts));
                array_shift($pathParts);
            }

            if (current($pathParts)) {
                $this->action = strtolower(current($pathParts));
                array_shift($pathParts);
            }

            while (count($pathParts)) {
                $paramName = array_shift($pathParts);
                $paramValue = array_shift($pathParts);
                $this->params[$paramName] = $paramValue;
            }
        }
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function getController()
    {
        return $this->controller;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getParams()
    {
        return $this->params;
    }

    public static function redirect($location)
    {
        header('Location: '.$location);
        exit;
    }
}