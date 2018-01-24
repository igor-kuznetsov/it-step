<?php

namespace website\core;

use Exception;

class View
{
    const VIEWS_PATH = ROOT . DS . 'views';

    private $data;
    private $path;

    public function __construct($data = [], $path = '')
    {
        if (empty($path)) {
            $path = self::getDefaultPath();
        }

        if (!file_exists($path)) {
            throw new Exception('Template file is not found in path: '.$path);
        }

        $this->data = $data;
        $this->path = $path;
    }

    public static function getDefaultPath()
    {
        $router = App::getRouter();
        $templateDir = $router->getController();
        $templateName = $router->getAction().'.php';

        return self::VIEWS_PATH . DS . $templateDir. DS . $templateName;
    }

    public function render()
    {
        $data = $this->data;
        ob_start();
        include $this->path;
        $content = ob_get_clean();

        return $content;
    }
}