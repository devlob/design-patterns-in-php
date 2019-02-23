<?php

namespace DesignPatternsInPHP\Antipatterns\Registry;

class Registry
{
    protected static $instance;
    protected static $entries = [];

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function getInstance(): Registry
    {
        if(static::$instance === null)
            static::$instance = new static();

        return static::$instance;
    }

    public static function set(string $key, $value)
    {
        static::$entries[$key] = $value;
    }

    public static function get(string $key)
    {
        if(!isset($key, static::$entries))
            throw new \Exception('Invalid key.');

        return static::$entries[$key];
    }

    public static function remove(string $key)
    {
        if(static::contains($key))
            unset(static::$entries[$key]);
    }

    public static function contains(string $key)
    {
        if(isset(static::$entries[$key]))
            return true;

        return false;
    }
}