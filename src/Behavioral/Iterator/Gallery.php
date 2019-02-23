<?php

namespace DesignPatternsInPHP\Behavioral\Iterator;

class Gallery implements \Iterator
{
    protected $index = 0;
    protected $images = [];

    public function __construct(array $images)
    {
        $this->images = $images;
    }

    public function current()
    {
        return $this->images[$this->key()];
    }

    public function next()
    {
        $this->index++;

        if(!$this->valid())
            $this->rewind();
    }

    public function key()
    {
        return $this->index;
    }

    public function valid()
    {
        return isset($this->images[$this->key()]);
    }

    public function rewind()
    {
        return $this->index = 0;
    }
}