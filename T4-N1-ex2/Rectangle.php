<?php

class Rectangle extends Shape
{
    function calcArea(): float
    {
        return $area = ($this->width * $this->height);
    }
}
