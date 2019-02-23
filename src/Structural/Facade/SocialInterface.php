<?php

namespace DesignPatternsInPHP\Structural\Facade;

interface SocialInterface
{
    public function __construct(string $message);

    public function share();
}