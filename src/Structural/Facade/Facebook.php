<?php

namespace DesignPatternsInPHP\Structural\Facade;

class Facebook implements SocialInterface
{
    protected $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function share()
    {
        return "Sharing on Facebook with the message '$this->message'";
    }
}