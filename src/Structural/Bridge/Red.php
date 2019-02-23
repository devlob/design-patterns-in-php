<?php

namespace DesignPatternsInPHP\Structural\Bridge;

class Red implements ColorInterface
{
    public function fill($image, int $x1, int $y1, int $x2, int $y2)
    {
        $color = imagecolorallocate($image, 255, 0, 0);

        imageline($image, $x1, $y1, $x2, $y2, $color);
    }
}