<?php

abstract class Vehicle
{
    public $color;

    public function move()
    {
        echo 'moving';
    }
}

class Truck extends Vehicle
{
    public function load()
    {
        echo 'loading cargo';
    }
}

$truck = new Truck();
$truck->color = 'red';
$truck->move();
echo '<hr>';
$car = new Vehicle(); // Error