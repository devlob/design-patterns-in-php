<?php

namespace DesignPatternsInPHP\Structural\Adapter;

class Stripe
{
    public function payCustomer(int $amount)
    {
        return "Sending $$amount using Stripe.";
    }
}