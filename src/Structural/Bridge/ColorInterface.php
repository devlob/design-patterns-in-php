<?php

namespace DesignPatternsInPHP\Structural\Bridge;

interface ColorInterface
{
    public function fill($image, int $x1, int $y1, int $x2, int $y2);
}