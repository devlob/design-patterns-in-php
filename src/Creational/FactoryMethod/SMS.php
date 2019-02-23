<?php

namespace DesignPatternsInPHP\Creational\FactoryMethod;

class SMS extends AbstractNotifier
{
    public function log(string $message = ''): string
    {
        if(!empty($message))
            return $message;

        return "Sending a SMS to $this->to";
    }
}