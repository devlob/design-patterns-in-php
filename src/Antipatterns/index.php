<?php

use DesignPatternsInPHP\Antipatterns\Registry\Evil;
use DesignPatternsInPHP\Antipatterns\Registry\Registry;
use DesignPatternsInPHP\Antipatterns\Singleton\Singleton;
use DesignPatternsInPHP\Antipatterns\Traits\Destination;
use DesignPatternsInPHP\Antipatterns\Traits\User;

require __DIR__ . './../../vendor/autoload.php';

function singleton()
{
    $singleton = Singleton::getInstance();

    $singleton2 = Singleton::getInstance();
}

function registry()
{
    $registry = Registry::getInstance();

    $registry::set('settings', [
        'environment' => 'production',
        'url' => 'https://devlob.com'
    ]);

    Evil::iAmVeryEvil();

    print_r($registry::get('settings'));

    if($registry::contains('settings'))
        echo "Contains settings\n";

    $registry::remove('settings');

    if($registry::contains('settings'))
        echo "Contains settings\n";
    else
        echo "Doesn't contain settings\n";
}

function traitDesign()
{
    $destination = new Destination();
    $destination->setAddress1('New York');
    $destination->setAddress2('Los Angeles');

    $user = new User();
    $user->setAddress1('Tirana');

    // Called by mistake. User table only has address1,
    // this will throw a database error
    // Trying to set a field that doesn't exist.
    $user->setAddress2('London');
}

\registry();
