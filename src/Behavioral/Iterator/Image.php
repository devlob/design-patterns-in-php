<?php

namespace DesignPatternsInPHP\Behavioral\Iterator;

class Image
{
    protected $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function getPath()
    {
        return $this->path;
    }
}