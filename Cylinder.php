<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 29/01/2019
 * Time: 15:16
 */
include_once('Circle.php');

class Cylinder extends Circle
{
    public $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume()
    {
        return parent::calculateArea() * $this->height;
    }
}