<?php

namespace DesignPatternsInPHP\Creational\AbstractFactory;

class JSONParser implements ParserInterface
{
    public function parse(string $input): array
    {
        return json_decode($input, true);
    }
}
