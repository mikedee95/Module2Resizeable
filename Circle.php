<?php


class Circle implements Resizeable
{
    public $radius;

    public function __construct($_radius)
    {
        $this->radius = $_radius;

    }

    public function resize($number)
    {
       return $this->radius = $this->radius * $number /100 + $this->radius;
    }


}