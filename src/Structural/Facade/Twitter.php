<?php

namespace DesignPatternsInPHP\Structural\Facade;

class Twitter implements SocialInterface
{
    protected $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function share()
    {
        return "Sharing on Twitter with the message '$this->message'";
    }
}