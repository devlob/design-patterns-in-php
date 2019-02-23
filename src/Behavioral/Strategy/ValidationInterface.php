<?php

namespace DesignPatternsInPHP\Behavioral\Strategy;

interface ValidationInterface
{
    public function __construct(string $value, string $name);

    public function validate(): string;
}