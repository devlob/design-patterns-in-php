<?php

namespace DesignPatternsInPHP\Creational\SimpleFactory;

class Luxurious extends AbstractVehicle
{
    public function call()
    {
        return 'A ' . $this->cars[array_rand($this->cars)]
            . ' car is coming to get you (luxurious)';
    }
}
