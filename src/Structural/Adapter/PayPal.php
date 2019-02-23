<?php

namespace DesignPatternsInPHP\Structural\Adapter;

class PayPal
{
    public function sendPayment(int $amount)
    {
        return "Sending $$amount using PayPal.";
    }
}