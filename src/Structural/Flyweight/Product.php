<?php

namespace DesignPatternsInPHP\Structural\Flyweight;

class Product implements ProductInterface
{
    protected $title, $price;

    public function __construct(string $title, int $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
}