<?php

namespace DesignPatternsInPHP\Behavioral\Command;

interface CommandInterface
{
    public function execute(): void;
}