<?php

namespace DesignPatternsInPHP\Antipatterns\Registry;

class Evil
{
    public static function iAmVeryEvil()
    {
        $registry = Registry::getInstance();
        $registry::set('settings', [
            'Muahahaha'
        ]);
    }
}