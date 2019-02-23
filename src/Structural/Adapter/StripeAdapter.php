<?php

namespace DesignPatternsInPHP\Structural\Adapter;

class StripeAdapter implements PaymentInterface
{
    protected $stripe;

    public function __construct(Stripe $stripe)
    {
        $this->stripe = $stripe;
    }

    public function pay(int $amount)
    {
        return $this->stripe->payCustomer($amount);
    }
}