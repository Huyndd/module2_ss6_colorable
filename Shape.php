<?php

/**
 * Created by PhpStorm.
 * User: huy
 * Date: 29/01/2019
 * Time: 15:17
 */
class Shape
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        return "I am a shape. My name is $this->name";
    }
}