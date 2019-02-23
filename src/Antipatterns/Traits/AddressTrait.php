<?php

namespace DesignPatternsInPHP\Antipatterns\Traits;

trait AddressTrait
{
    protected $address1, $address2;

    public function setAddress1(string $address)
    {
        if(empty($address))
            throw new \Exception('Address cannot be empty');

        $this->address1 = $address;
    }

    public function setAddress2(string $address)
    {
        if(empty($address))
            throw new \Exception('Address cannot be empty');

        $this->address2 = $address;
    }
}