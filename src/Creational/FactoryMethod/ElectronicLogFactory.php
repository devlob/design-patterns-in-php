<?php

namespace DesignPatternsInPHP\Creational\FactoryMethod;

class ElectronicLogFactory implements LogFactoryInterface
{
    public static function getNotifier(string $notifier, string $to)
    {
        switch ($notifier) {
            case 'SMS':
                return new SMS($to);
            case 'Email':
                return new Email($to, 'Renato');
            default:
                throw new \Exception('Notifier invalid');
        }
    }
}