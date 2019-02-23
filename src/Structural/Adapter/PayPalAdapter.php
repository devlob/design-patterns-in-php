<?php

namespace DesignPatternsInPHP\Structural\Adapter;

class PayPalAdapter implements PaymentInterface
{
    protected $payPal;

    public function __construct(PayPal $payPal)
    {
        $this->payPal = $payPal;
    }

    public function pay(int $amount)
    {
        return $this->payPal->sendPayment($amount);
    }
}