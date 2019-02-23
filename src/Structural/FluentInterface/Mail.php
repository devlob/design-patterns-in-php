<?php

namespace DesignPatternsInPHP\Structural\FluentInterface;

class Mail
{
    protected $to, $subject, $body;

    public function to(string $to)
    {
        $this->to = $to;

        return $this;
    }

    public function subject(string $subject)
    {
        $this->subject = $subject;

        return $this;
    }

    public function body(string $body)
    {
        $this->body = $body;

        return $this;
    }

    public function send()
    {
        echo "Sending an email to $this->to";
    }
}