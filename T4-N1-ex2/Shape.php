<?php


abstract class Shape
{
    public float $width;
    public float $height;


    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    abstract function calcArea(): float;
}
