<?php

include('Shape.php');
include('Triangle.php');
include('Rectangle.php');


$shape1 = new Triangle(3.2, 6);
echo "The area is: " . $shape1->calcArea() . PHP_EOL;

$shape2 = new Rectangle(3, 6.85);
echo "The area is: " . $shape2->calcArea() . PHP_EOL;
