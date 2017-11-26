<?php

class TestDestructor
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __destruct()
    {
        echo "$this->name destructor has been called";
        echo '<hr>';
    }
}

$obj1 = new TestDestructor('object 1');
$obj2 = new TestDestructor('object 2');
$obj3 = new TestDestructor('object 3');

echo 'some text goes here....';
echo '<hr>';

unset($obj2);

echo 'other text goes here after unset $obj2';
echo '<hr>';