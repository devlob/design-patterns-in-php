<?php

namespace DesignPatternsInPHP\Structural\Bridge;

class Brush extends AbstractTool
{
    protected $thickness;

    public function __construct(int $thickness)
    {
        $this->thickness = $thickness;
    }

    public function draw($image, int $x1, int $y1, int $x2, int $y2)
    {
        imagesetthickness($image, $this->thickness);

        return $this->color->fill($image, $x1, $y1, $x2, $y2);
    }
}