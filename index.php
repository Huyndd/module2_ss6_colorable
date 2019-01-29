<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 29/01/2019
 * Time: 15:18
 */
include_once('Circle.php');
include_once('Cylinder.php');
include_once('Rectangle.php');
include_once('Square.php');
$shapes[0] = new Circle('Circle 1', 2);
$shapes[1] = new Cylinder('Cylinder 1', 4, 6);
$shapes[2] = new Rectangle('Rectangle 1', 6, 3);
$shapes[3] = new Square('Square 1', 7, 7, 7);
foreach ($shapes as $shape) {
    echo $shape->name . "<br>" . "Area: " . $shape->calculateArea() . "<br>";
    if ($shape instanceof Square) {
        echo $shape->howToColor();
    }
}