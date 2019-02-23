<?php

namespace DesignPatternsInPHP\Creational\FactoryMethod;

class SystemLogFactory implements LogFactoryInterface
{
    public static function getNotifier(string $notifier, string $to)
    {
        switch ($notifier) {
            case 'File':
                return new File($to);
            default:
                throw new \Exception('Notifier invalid');
        }
    }
}