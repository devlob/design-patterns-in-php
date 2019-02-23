<?php

namespace DesignPatternsInPHP\Structural\Decorator;

class InternationalShipping extends AbstractParcelDecorator
{
    const PRICE = 5;

    public function calculatePrice(): int
    {
        return $this->parcel->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->parcel->getDescription() . ' shipped to an international destination';
    }
}