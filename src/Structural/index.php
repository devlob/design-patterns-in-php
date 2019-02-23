<?php

ini_set('memory_limit', '8192M');

use DesignPatternsInPHP\Structural\Adapter\PayPal;
use DesignPatternsInPHP\Structural\Adapter\PayPalAdapter;
use DesignPatternsInPHP\Structural\Adapter\Stripe;
use DesignPatternsInPHP\Structural\Adapter\StripeAdapter;
use DesignPatternsInPHP\Structural\Bridge\Black;
use DesignPatternsInPHP\Structural\Bridge\Blue;
use DesignPatternsInPHP\Structural\Bridge\Brush;
use DesignPatternsInPHP\Structural\Bridge\Pencil;
use DesignPatternsInPHP\Structural\Bridge\Red;
use DesignPatternsInPHP\Structural\Composite\Playlist;
use DesignPatternsInPHP\Structural\Composite\Song;
use DesignPatternsInPHP\Structural\Decorator\InternationalShipping;
use DesignPatternsInPHP\Structural\Decorator\Parcel;
use DesignPatternsInPHP\Structural\Facade\Devlob;
use DesignPatternsInPHP\Structural\Facade\Facebook;
use DesignPatternsInPHP\Structural\Facade\Share;
use DesignPatternsInPHP\Structural\Facade\Twitter;
use DesignPatternsInPHP\Structural\FluentInterface\Mail;
use DesignPatternsInPHP\Structural\Flyweight\ProductFlyweightFactory;
use DesignPatternsInPHP\Structural\Proxy\ProxyFile;

require __DIR__ . './../../vendor/autoload.php';

function decorator()
{
    $parcel = new Parcel(10, 'A Supreme t-shirt');
    $parcel = new InternationalShipping($parcel);

    echo "{$parcel->getDescription()} for \${$parcel->calculatePrice()}.";
}

function adapter()
{
    $payPal = new PayPalAdapter(new PayPal());
    echo $payPal->pay(10);

    $stripe = new StripeAdapter(new Stripe());
    echo $stripe->pay(10);
}

function bridge()
{
    $image = imagecreatetruecolor(400, 400);

    imagefill($image, 0, 0, imagecolorallocate($image, 255, 255, 255));

    $pencil = new Pencil();
    $pencil->setColor(new Blue());

    for($i = 40; $i < 400; $i += 40)
        $pencil->draw($image, 0,$i, 400, $i);

    $pencil->setColor(new Red());
    $pencil->draw($image, 50, 0, 50, 400);

    $brush = new Brush(5);
    $brush->setColor(new Black());
    $brush->draw($image, 70, 10, 70, 40);
    $brush->draw($image, 90, 10, 90, 40);
    $brush->draw($image, 70, 25, 90, 25);
    $brush->draw($image, 100, 10, 100, 40);

    imagepng($image, 'bridge.png');
}

function facade()
{
    $message = 'New video is here!';

    $facebook = new Facebook($message);
    $devlob = new Devlob($message);

    Share::to($facebook, null, $devlob);
}

function fluentInterface()
{
    $mail = new Mail();
    $mail->to('john@doe.com')
        ->subject('Greetings')
        ->body('Hello John!')
        ->send();
}

function proxy()
{
    $file = new ProxyFile('proxy.txt');

    echo $file->display() . '<br>';
    echo $file->display();
}

function composite()
{
    $rockPlaylist = new Playlist();
    $rockPlaylist->addSong(new Song('The Kill', '30 Seconds to Mars', '/music/thekill.mp3'));
    $rockPlaylist->addSong(new Song('Given Up', 'Linkin Park', '/music/givenup.mp3'));
    $rockPlaylist->addSong(new Song('Pretty Fly', 'The Offspring', '/music/prettyfly.mp3'));

    echo $rockPlaylist->play() . '<br>';
    echo $rockPlaylist->next() . '<br>';
    echo $rockPlaylist->next() . '<br>';
    echo $rockPlaylist->next() . '<br>';
    echo $rockPlaylist->next() . '<br>';
    echo $rockPlaylist->previous() . '<br>';
    echo $rockPlaylist->previous() . '<br>';
    echo $rockPlaylist->previous() . '<br>';

    $song = new Song('Nightcore Bring me to life', '', '/music/nightcorebringmetolife.mp3');
    echo $song->play() . '<br>';
}

function flyweight()
{
    $factory = new ProductFlyweightFactory();

    for ($i = 0; $i < 5000; $i++) {
        $numOfProducts = rand(10, 1000);
        $randomTitle = uniqid();
        $randomPrice = rand(10, 20000);

        for ($p = 0; $p < $numOfProducts; $p++)
            $factory->add($randomTitle, $randomPrice);
    }
}

flyweight();
