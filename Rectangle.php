<?php


class Rectangle implements Resizeable
{
    public $width;
    public $height;

    public function __construct($_width,$_height)
    {
        $this->width = $_width;
        $this->height = $_height;
    }

    public function resize($number)
    {
       echo $this->width = $number * $this->width/100 + $this->width;
       echo $this->height = $number * $this->height/100 + $this->height;
    }
}