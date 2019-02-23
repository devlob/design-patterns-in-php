<?php

namespace DesignPatternsInPHP\Structural\Flyweight;

class ProductFlyweightFactory
{
    protected $pool = [];

    public function add(string $title, int $price)
    {
        if (!isset($this->pool[$title]))
            $this->pool[$title] = new Product($title, $price);

        return $this->pool[$title];
    }
}