<?php

namespace DesignPatternsInPHP\Creational\FactoryMethod;

interface LogFactoryInterface
{
    public static function getNotifier(string $notifier, string $to);
}