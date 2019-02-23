<?php

use DesignPatternsInPHP\Behavioral\Command\CommandInterface;
use DesignPatternsInPHP\Behavioral\Command\DeleteAccounts;
use DesignPatternsInPHP\Behavioral\Command\DeleteAccountsCommand;
use DesignPatternsInPHP\Behavioral\Command\Invoker;
use DesignPatternsInPHP\Behavioral\Iterator\Gallery;
use DesignPatternsInPHP\Behavioral\Iterator\Image;
use DesignPatternsInPHP\Behavioral\Memento\File;
use DesignPatternsInPHP\Behavioral\Observer\Login;
use DesignPatternsInPHP\Behavioral\Observer\NotifierObserver;
use DesignPatternsInPHP\Behavioral\Strategy\Validator;

require __DIR__ . './../../vendor/autoload.php';

function observer()
{
    $login = new Login();
    $login->attach(new NotifierObserver());
    $login->login([
        'email' => 'john@doe.com',
        'password' => 'secret'
    ]);
}

function iterator()
{
    $image1 = new Image('/Devlob.jpg');
    $image2 = new Image('/Google.jpg');
    $image3 = new Image('/Apple.jpg');

    $gallery = new Gallery([$image1, $image2, $image3]);

    echo $gallery->current()->getPath() . '<br>';
    $gallery->next();
    echo $gallery->current()->getPath() . '<br>';
    $gallery->next();
    echo $gallery->current()->getPath() . '<br>';
    $gallery->next();
    echo 'Reset to: ' . $gallery->current()->getPath() . '<br>';

    $gallery->next();
    echo $gallery->current()->getPath() . '<br>';

    $gallery->rewind();
    echo $gallery->current()->getPath() . '<br>';
}

function memento()
{
    $file = new File('Started', 'memento.txt');
    echo $file->getContent() . '<br>';

    $file->overwrite('This has to be saved!');
    echo $file->getContent() . '<br>';

    $memento = $file->save();

    $file->overwrite('Updated');
    echo $file->getContent() . '<br>';

    $file->restore($memento);
    echo $file->getContent() . '<br>';
}

function strategy()
{
    $request = [
        [
            'name' => 'email',
            'value' => 'notValid@',
            'rules' => 'email|required'
        ],

        [
            'name' => 'price',
            'value' => 123,
            'rules' => 'numeric|required'
        ],

        [
            'name' => 'quantity',
            'value' => '',
            'rules' => 'numeric|required'
        ]
    ];

    $errors = Validator::validate($request);

    print_r($errors);
}

function command()
{
    $notActivated = [
        (object) [
            'username' => 'prank',
            'email' => 'prank@gmail.com',
            'created_at' => '2019-01-30 10:10:10'
        ],

        (object) [
            'username' => 'test',
            'email' => 'test@gmail.com',
            'created_at' => '2018-01-30 10:10:10'
        ]
    ];

    executeCommand(new DeleteAccountsCommand(new DeleteAccounts($notActivated)));
}

function executeCommand(CommandInterface $command)
{
    $invoker = new Invoker();
    $invoker->setCommand($command);
    $invoker->execute();
}

strategy();
