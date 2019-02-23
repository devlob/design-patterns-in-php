<?php

namespace DesignPatternsInPHP\Structural\Facade;

class Devlob implements SocialInterface
{
    protected $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function share()
    {
        return "Sharing on Devlob with the  message '$this->message'";
    }
}