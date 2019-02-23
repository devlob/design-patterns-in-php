<?php

namespace DesignPatternsInPHP\Behavioral\Observer;

use SplObserver;

class Login implements \SplSubject
{
    public $oldLocation, $newLocation;
    protected $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
        $this->oldLocation = 'Los Angeles';
        $this->newLocation = 'New York';
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer)
            $observer->update($this);
    }

    public function login(array $credentials)
    {
        if($this->newLocation !== $this->oldLocation)
            $this->notify();
    }
}