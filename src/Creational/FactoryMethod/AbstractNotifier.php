<?php

namespace DesignPatternsInPHP\Creational\FactoryMethod;

abstract class AbstractNotifier
{
    protected $to;

    public function __construct(string $to)
    {
        $this->to = $to;
    }

    abstract public function log(string $message = ''): string;
}