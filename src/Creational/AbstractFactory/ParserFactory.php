<?php

namespace DesignPatternsInPHP\Creational\AbstractFactory;

class ParserFactory extends AbstractParserFactory
{
    public function createJSONParser()
    {
        return new JSONParser();
    }

    public function createCSVParser()
    {
        return new CSVParser();
    }

    public function createXMLParser()
    {
        return new XMLParser();
    }
}