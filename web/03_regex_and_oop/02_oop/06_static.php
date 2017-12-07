<?php

namespace web\oop;

class App
{
    const VERSION = '1.2.0';

    private static $instance = null;
    private $started;

    private function __clone() {}

    private function __wakeup() {}

    private function __construct()
    {
        $this->started = date('Y-m-d H:i:s');
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new App();
        }

        return self::$instance;
    }

    public function getStarted()
    {
        return $this->started;
    }

    public static function start()
    {
        return self::getName();
        //return static::getName();
    }

    private static function getName()
    {
        return 'Main App';
    }
}

class TestApp extends App
{
    public static function getName()
    {
        return 'Test App';
    }
}

echo App::VERSION;
echo '<hr>';
$app1 = App::getInstance();
echo $app1->getStarted();
echo '<hr>';
echo TestApp::start();