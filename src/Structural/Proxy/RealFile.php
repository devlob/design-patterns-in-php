<?php

namespace DesignPatternsInPHP\Structural\Proxy;

class RealFile implements FileInterface
{
    protected $filename, $content;

    public function __construct(string $filename)
    {
        $this->filename = $filename;

        $this->load($filename);
    }

    public function display(): string
    {
        return $this->content;
    }

    public function load(string $filename): void
    {
        echo "<p>Loading $filename...</p>";

        $file = fopen($filename, 'r');

        $this->content = fread($file, filesize($this->filename));
    }
}