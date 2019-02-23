<?php

namespace DesignPatternsInPHP\Creational\AbstractFactory;

interface ParserInterface
{
    public function parse(string $input): array;
}