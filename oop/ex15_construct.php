<?php

class TestConstructor
{
    public function __construct()
    {
        echo 'class constructor has been called';
        echo '<hr>';
    }
}

$obj1 = new TestConstructor();
$obj2 = new TestConstructor();

$obj3 = clone $obj1; // not called

echo 'some text goes here....';
echo '<hr>';

class TestPrivateConstructor
{
    private function __construct()
    {
        echo 'class private constructor has been called';
        echo '<hr>';
    }
}

$obj4 = new TestPrivateConstructor(); // Error