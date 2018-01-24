<?php

namespace website\core;

class Config
{
    const CONFIG_PATH = ROOT. DS . 'config';

    private static $settings = [];

    public static function get($key)
    {
        return isset(self::$settings[$key]) ? self::$settings[$key] : null;
    }

    public static function set($key, $value)
    {
        self::$settings[$key] = $value;
    }

    public static function load()
    {
        $configFiles = glob(self::CONFIG_PATH . DS . '*.php');

        foreach ($configFiles as $configFile) {
            require_once $configFile;
        }
    }
}