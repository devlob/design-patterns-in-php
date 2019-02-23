<?php

namespace DesignPatternsInPHP\Creational\AbstractFactory;

class XMLParser implements ParserInterface
{
    public function parse(string $input): array
    {
        return (array)simplexml_load_string($input);
    }
}