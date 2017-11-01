<?php

abstract class Figure
{
    abstract public function area();
}

class Rectangle extends Figure
{
    public $width;
    public $height;

    public function area()
    {
        return $this->width * $this->height;
    }
}

class Circle extends Figure
{
    public $radius;

    public function area()
    {
        return 3.14 * pow($this->radius, 2);
    }
}

$circle = new Circle();

$circle->radius = 5;
echo $circle->area();