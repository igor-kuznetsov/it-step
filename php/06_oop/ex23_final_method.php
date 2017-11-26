<?php

class TestFinalMethod
{
    public $someProperty;

    public function someFunction()
    {
        echo 'some method';
    }

    final public function testFinalFunction()
    {
        echo 'this method cannot be overridden';
    }
}

class TestFinalMethodChild extends TestFinalMethod
{
    protected $anotherProperty;

    public function someFunction()
    {
        echo 'someFunction is overridden';
    }

    public function testFinalFunction()
    {
        // Error
    }
}