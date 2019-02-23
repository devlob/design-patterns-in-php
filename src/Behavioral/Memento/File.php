<?php

namespace DesignPatternsInPHP\Behavioral\Memento;

class File
{
    protected $content, $filename;

    public function __construct(string $content = null, string $filename)
    {
        $this->filename = $filename;

        $file = fopen($this->filename, 'w') or die('Unable to open file!');

        if($content !== null)
            fwrite($file, $content);

        fclose($file);

        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function overwrite(string $content)
    {
        $file = fopen($this->filename, 'w') or die('Unable to open file!');
        fwrite($file, $content);
        fclose($file);

        $this->content = $content;
    }

    public function save(): FileMemento
    {
        return new FileMemento($this->content);
    }

    public function restore(FileMemento $memento)
    {
        $file = fopen($this->filename, 'w') or die('Unable to open file!');
        fwrite($file, $memento->getContent());
        fclose($file);

        $this->content = $memento->getContent();
    }
}