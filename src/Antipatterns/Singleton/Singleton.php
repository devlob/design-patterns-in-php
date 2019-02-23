<?php

namespace DesignPatternsInPHP\Antipatterns\Singleton;

class Singleton
{
    protected static $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function getInstance(): Singleton
    {
        if(static::$instance === null)
            static::$instance = new static();

        return static::$instance;
    }
}