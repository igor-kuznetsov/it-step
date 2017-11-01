<?php

abstract class Vehicle
{
    public $color;
    protected $type;
    private $cargo;

    public function getCargo()
    {
        return $this->cargo;
    }

    protected function setCargo()
    {
        $this->setDefaultCargo();
    }

    private function setDefaultCargo()
    {
        $this->cargo = 'iphone';
    }
}

class Truck extends Vehicle
{
    public function loadCargo()
    {
        $this->setCargo();
    }
}

$truck = new Truck();
$truck->color = 'red';
$truck->loadCargo();
echo $truck->getCargo();

echo '<hr>';

$car = new Vehicle(); // Error