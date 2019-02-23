<?php

namespace DesignPatternsInPHP\Creational\FactoryMethod;

class Email extends AbstractNotifier
{
    protected $from;

    public function __construct(string $to, string $from)
    {
        parent::__construct($to);

        $this->from = $from;
    }

    public function log(string $message = ''): string
    {
        if(!empty($message))
            return $message;

        return "Sending an email to $this->to from $this->from.";
    }
}