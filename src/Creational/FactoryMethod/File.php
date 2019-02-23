<?php

namespace DesignPatternsInPHP\Creational\FactoryMethod;

class File extends AbstractNotifier
{
    public function log(string $message = ''): string
    {
        file_put_contents($this->to, $message . PHP_EOL, FILE_APPEND);

        return 'Saved to file';
    }
}