<?php

namespace DesignPatternsInPHP\Behavioral\Strategy;

class Required implements ValidationInterface
{
    protected $value, $name;

    public function __construct(string $value, string $name)
    {
        $this->value = $value;
        $this->name = $name;
    }

    public function validate(): string
    {
        if(strlen($this->value) === 0)
            return "$this->name field is required.";

        return '';
    }
}