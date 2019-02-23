<?php

namespace DesignPatternsInPHP\Behavioral\Strategy;

class Numeric implements ValidationInterface
{
    protected $value, $name;

    public function __construct(string $value, string $name)
    {
        $this->value = $value;
        $this->name = $name;
    }

    public function validate(): string
    {
        if(!is_numeric($this->value))
            return "$this->name field is not a valid number.";

        return '';
    }
}