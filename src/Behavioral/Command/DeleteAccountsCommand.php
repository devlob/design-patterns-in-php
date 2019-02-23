<?php

namespace DesignPatternsInPHP\Behavioral\Command;

class DeleteAccountsCommand implements CommandInterface
{
    protected $receiver;

    public function __construct(DeleteAccounts $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute(): void
    {
        $this->receiver->delete();
    }
}