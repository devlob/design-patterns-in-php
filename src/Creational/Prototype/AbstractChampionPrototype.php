<?php

namespace DesignPatternsInPHP\Creational\Prototype;

abstract class AbstractChampionPrototype
{
    protected $name, $att, $def;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAtt()
    {
        return $this->att;
    }

    public function setAtt($att)
    {
        $this->att = $att;
    }

    public function getDef()
    {
        return $this->def;
    }

    public function setDef($def)
    {
        $this->def = $def;
    }

    public function load()
    {
        echo "Loading {$this->getName()} <br>";
    }
}