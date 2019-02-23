<?php

namespace DesignPatternsInPHP\Creational\AbstractFactory;

class CSVParser implements ParserInterface
{
    public function parse(string $input): array
    {
        $lines = [];

        foreach (explode(PHP_EOL, $input) as $line) {
            $lines[] = str_getcsv($line);
        }

        return $lines;
    }
}
