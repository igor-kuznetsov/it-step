<?php

namespace web\oop;

class TestPhpOverloading
{
    private $data = [];
    private $hidden = 22;

    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        return null;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        if (array_key_exists($name, $this->data)) {
            unset($this->data[$name]);
        }
    }

    public function __call($name, $arguments)
    {
        echo "Method '$name' called with arguments: " . implode(', ', $arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        echo "Static method '$name' called with arguments: " . implode(', ', $arguments);
    }

    public function getHidden()
    {
        return $this->hidden;
    }
}

$obj = new TestPhpOverloading();

print "<pre>";
print_r($obj);
print "</pre>";

echo '<hr>';

$obj->a = 'A';
$obj->b = 2;
$obj->c = 10;
$obj->hidden = 'hidden string';

echo $obj->getHidden(); // $this->hidden

echo '<hr>';

echo $obj->hidden; // $this->data['hidden']

echo '<hr>';

echo $obj->existing;

echo '<hr>';

print "<pre>";
print_r($obj);
print "</pre>";

echo '<hr>';

var_dump(isset($obj->b));

echo '<hr>';

unset($obj->c);

print "<pre>";
print_r($obj);
print "</pre>";

echo '<hr>';

$obj->runTest(10, 'string value', 56, 67);

echo '<hr>';

$obj::runStaticTest(55, 'bla-bla-bla');