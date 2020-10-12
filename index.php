<?php

include 'Resizeable.php';
include 'Square.php';
include 'Rectangle.php';
include 'Circle.php';

$square = new Square(100);
$rectangle = new Rectangle(10,5);
$circle = new Circle(6);
echo $square->resize(-5);
echo "<br>";
echo $circle->resize(200);
echo "<br>";
echo $rectangle->resize(50);
