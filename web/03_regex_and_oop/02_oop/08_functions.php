<?php

namespace web\oop;

interface CreatedInterface
{
    public function getCreated();
}

abstract class AbstractProduct
{
    const DATE_FORMAT = 'Y-m-d H:i:s';

    public $title;
    protected $created;

    public function __construct($title)
    {
        $this->title = $title;
        $this->created = $this->now();
    }

    private function now()
    {
        return date(self::DATE_FORMAT);
    }
}

class Product extends AbstractProduct implements CreatedInterface
{
    private $data = [];

    public function getCreated()
    {
        return $this->created;
    }
}

$obj = new Product('ThinkPad T460');

echo "<pre>";
var_dump(class_exists('web\oop\Product'));
echo "<hr>";
print_r(get_class_methods('web\oop\Product'));
print_r(get_class_methods($obj));
echo "<hr>";
var_dump(method_exists('web\oop\Product', 'getCreated'));
var_dump(method_exists($obj, 'getCreated'));
echo "<hr>";
print_r(get_class_vars('web\oop\Product'));
print_r(get_object_vars($obj));
echo "<hr>";
print_r(get_declared_classes());
echo "<hr>";
print_r(get_declared_interfaces());
echo "<hr>";
echo get_parent_class('web\oop\Product');
echo "<br>";
echo get_parent_class($obj);
echo "<hr>";
var_dump(is_subclass_of('web\oop\Product', 'web\oop\AbstractProduct'));
var_dump(is_subclass_of($obj, 'web\oop\AbstractProduct'));
echo "<hr>";
var_dump(is_a($obj, 'web\oop\Product'));