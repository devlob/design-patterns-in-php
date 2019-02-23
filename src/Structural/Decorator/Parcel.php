<?php

namespace DesignPatternsInPHP\Structural\Decorator;

class Parcel implements ParcelInterface
{
    protected $price, $description;

    public function __construct(int $price, string $description)
    {
        $this->price = $price;
        $this->description = $description;
    }

    public function calculatePrice(): int
    {
        return $this->price;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}