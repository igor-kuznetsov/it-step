<?php

final class TestFinalClass
{
    public $someProperty;

    public function someMethod()
    {
        echo 'some method';
    }
}

class TestFinalClassChild extends TestFinalClass
{
    // Error
}