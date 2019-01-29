<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 29/01/2019
 * Time: 15:18
 */
include_once('Rectangle.php');
include_once "Colorable.php";

class Square extends Rectangle implements Colorable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }

    public function howtoColor()
    {
        return "Color all four sides.";
    }
}