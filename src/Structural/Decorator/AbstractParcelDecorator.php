<?php

namespace DesignPatternsInPHP\Structural\Decorator;

abstract class AbstractParcelDecorator implements ParcelInterface
{
    protected $parcel;

    public function __construct(ParcelInterface $parcel)
    {
        $this->parcel = $parcel;
    }
}