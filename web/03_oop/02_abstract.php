<?php

namespace web\oop;

abstract class Shape
{
    private $name;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}

abstract class Shape2D extends Shape
{
    abstract public function render();
}

abstract class GeometricFigure extends Shape2D
{
    abstract public function area();
}

class Rectangle extends GeometricFigure
{
    public $width;
    public $height;

    public function area()
    {
        return $this->width * $this->height;
    }

    public function render()
    {
        // render rectangle
    }
}

class Circle extends GeometricFigure
{
    public $radius;

    public function area()
    {
        return 3.14 * pow($this->radius, 2);
    }

    public function render()
    {
        // render circle
    }
}

$circle = new Circle();

$circle->radius = 5;
echo $circle->area();
