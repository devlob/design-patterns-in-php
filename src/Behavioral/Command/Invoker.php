<?php

namespace DesignPatternsInPHP\Behavioral\Command;

class Invoker
{
    protected $command;

    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }

    public function execute()
    {
        $this->command->execute();
    }
}