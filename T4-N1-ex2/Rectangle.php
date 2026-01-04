<?php

class Rectangle extends Shape
{
    function calcArea(): float
    {
        $area = ($this->width * $this->height);

        return $area;
    }
}
