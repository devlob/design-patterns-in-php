<?php

namespace DesignPatternsInPHP\Structural\Composite;

class Song implements MusicInterface
{
    protected $title, $artist, $path;

    public function __construct(string $title, string $artist, string $path)
    {
        $this->title = $title;
        $this->artist = $artist;
        $this->path = $path;
    }

    public function play()
    {
        return $this->path;
    }
}