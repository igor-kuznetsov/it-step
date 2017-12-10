<?php

namespace web\oop;

class TestMagic
{
    public $test = '1111';
    protected $name;
    private $data = [];

    public function setName($name)
    {
        $this->name = $name;
    }

    public function __construct($name)
    {
        $this->name = $name;
        echo $this->name . ' has been created';
        echo '<hr>';
    }

    public function __destruct()
    {
        echo $this->name . ' has been destroyed';
        echo '<hr>';
    }

    public function __clone()
    {
        echo $this->name . ' has been cloned';
        echo '<hr>';
    }

    public function __sleep()
    {
        return ['test'];
    }

    public function __wakeup()
    {
        echo $this->name . ' was unserialized';
        echo '<hr>';
    }

    public function __toString()
    {
        return $this->name . ' converted to this string';
    }

    public function __invoke($someArgument, $anotherArgument)
    {
        var_dump($someArgument);
        echo '<br>';
        var_dump($anotherArgument);
        echo '<hr>';
    }

    public function __debugInfo()
    {
        return [
            'fakeProperty' => 'fake value'
        ];
    }
}

$obj = new TestMagic('obj 1'); // __construct
$obj2 = new TestMagic('obj 2');

unset($obj2); // __destruct

$obj3 = clone $obj; // __clone
$obj3->setName('obj 3');

$serializedObj = serialize($obj); // __sleep
echo $serializedObj;
echo '<hr>';

$obj4 = unserialize($serializedObj); // __wakeup
$obj4->setName('obj 4');

echo $obj; // __toString
echo '<hr>';

$obj(10, 'test_text'); // __invoke

print "<pre>";
var_dump($obj); // __debugInfo
print_r($obj); // __debugInfo
print "</pre>";
echo '<hr>';
