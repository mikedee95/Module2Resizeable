<?php


class Square implements Resizeable
{
    public $width;

    public function __construct($_width)
    {
        $this->width = $_width;
    }

    public function resize($number)
    {
       return $this->width += $this->width*$number/100;
    }

}

