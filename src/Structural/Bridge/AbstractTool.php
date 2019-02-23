<?php

namespace DesignPatternsInPHP\Structural\Bridge;

abstract class AbstractTool
{
    protected $color;

    public function setColor(ColorInterface $color)
    {
        $this->color = $color;
    }

    public function draw($image, int $x1, int $y1, int $x2, int $y2)
    {
        return $this->color->fill($image, $x1, $y1, $x2, $y2);
    }
}