<?php

namespace DesignPatternsInPHP\Structural\Facade;

class Share
{
    public static function to(SocialInterface $facebook = null, SocialInterface $twitter = null, SocialInterface $devlob = null)
    {
        if ($facebook !== null)
            echo $facebook->share() . '<br>';

        if ($twitter !== null)
            echo $twitter->share() . '<br>';

        if ($devlob !== null)
            echo $devlob->share() . '<br>';
    }
}