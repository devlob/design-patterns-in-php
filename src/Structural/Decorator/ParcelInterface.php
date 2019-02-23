<?php

namespace DesignPatternsInPHP\Structural\Decorator;

interface ParcelInterface
{
    public function calculatePrice(): int;

    public function getDescription(): string;
}