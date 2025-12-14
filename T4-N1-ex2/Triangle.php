<?php

class Triangle extends Shape
{

    function calcArea(): float
    {
        return $area = ($this->width * $this->height) / 2;
    }
}
