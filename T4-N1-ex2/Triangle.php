<?php

class Triangle extends Shape
{

    function calcArea(): float
    {
        $area = ($this->width * $this->height) / 2;

        return $area;
    }
}
