<?php
# *** TASCA 4, NIVELL 1, EXERCICI 2 ***
/*Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. 
Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea amb un mètode.*/

class shape
{
    public float $width;
    public float $height;


    function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    function calcArea() {}
}

class triangle extends shape
{

    function calcArea()
    {
        return (float) $area = ($this->width * $this->height) / 2;
    }
}

class rectangle extends shape
{
    function calcArea()
    {
        return (float) $area = ($this->width * $this->height);
    }
}

$shape1 = new triangle(5.2, 6);
echo "The area is: " . $shape1->calcArea() . PHP_EOL;

$shape2 = new rectangle(3, 6.8);
echo "The area is: " . $shape2->calcArea() . PHP_EOL;
