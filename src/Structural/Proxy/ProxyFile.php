<?php

namespace DesignPatternsInPHP\Structural\Proxy;

class ProxyFile implements FileInterface
{
    protected $file, $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function display(): string
    {
        if($this->file === null)
            $this->file = new RealFile($this->filename);

        return $this->file->display();
    }
}