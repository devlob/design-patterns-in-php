<?php

namespace DesignPatternsInPHP\Behavioral\Command;

class DeleteAccounts
{
    protected $accounts;

    public function __construct(array $accounts)
    {
        $this->accounts = $accounts;
    }

    public function delete()
    {
        foreach ($this->accounts as $account) {
            $createdAt = new \DateTime($account->created_at);
            $dateDifference = $createdAt->diff(new \DateTime(date('Y-m-d H:i:s')))->days;

            if ($dateDifference > 30)
                echo "Deleting $account->username with email $account->email \n";
        }
    }
}