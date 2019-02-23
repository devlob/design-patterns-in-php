<?php

namespace DesignPatternsInPHP\Structural\Flyweight;

interface ProductInterface
{
    public function __construct(string $title, int $price);

    public function getTitle(): string;

    public function getPrice(): int;
}