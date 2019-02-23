<?php

namespace DesignPatternsInPHP\Structural\Adapter;

interface PaymentInterface
{
    public function pay(int $amount);
}