<?php

class RectangleFigure
{
    public $width;
    public $height;

    public function getArea()
    {
        return $this->width * $this->height;
    }

//    public function wrongUseOfThis()
//    {
//        $this = 10; // Error!!!
//    }
}

$square = new RectangleFigure();
$square->width = 10;
$square->height = 10;

echo $square->getArea(); // 100