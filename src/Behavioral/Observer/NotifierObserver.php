<?php

namespace DesignPatternsInPHP\Behavioral\Observer;

use SplSubject;

class NotifierObserver implements \SplObserver
{
    public function update(SplSubject $subject)
    {
        echo "Did you just login from $subject->newLocation?";
    }
}