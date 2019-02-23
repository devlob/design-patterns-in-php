<?php

namespace DesignPatternsInPHP\Structural\Proxy;

interface FileInterface
{
    public function __construct(string $filename);

    public function display(): string;
}