<?php

namespace DesignPatternsInPHP\Creational\AbstractFactory;

abstract class AbstractParserFactory
{
    abstract public function createJSONParser();

    abstract public function createCSVParser();

    abstract public function createXMLParser();
}