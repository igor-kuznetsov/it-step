<?php

class TestStatic
{
    public static $color;
    public $y;

    public function getColor()
    {
        //return TestStatic::$color;
        echo self::$color;
    }

    public static function echoText()
    {
        echo 'Text';
    }

//    public static function wrongStaticCallToThis()
//    {
//        echo $this->y; // Error
//    }
}

TestStatic::$color = 'green';
echo TestStatic::$color;

echo '<hr>';

TestStatic::echoText(); // Text

echo '<hr>';

$obj = new TestStatic();
echo $obj->getX();

echo '<hr>';

TestStatic::getX(); // Error
TestStatic::wrongStaticCallToThis(); // Error
TestStatic::$y = 200; // Error
$obj->x = 500; // Error



class StaticCounter
{
    public static $counter;

    public function __construct()
    {
        ++StaticCounter::$counter;
    }

    public function getCounter()
    {
        return StaticCounter::$counter;
    }
}

$obj1 = new StaticCounter();
echo $obj1->getCounter();

echo '<hr>';

$obj2 = new StaticCounter();
$obj3 = new StaticCounter();
$obj4 = new StaticCounter();

echo $obj1->getCounter();