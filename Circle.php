<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 29/01/2019
 * Time: 15:16
 */
include_once('Shape.php');

class Circle extends Shape
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }
}