<?php

abstract class AbstractBase
{
    abstract public function base();
    abstract public function base2();
}

abstract class AbstractChild extends AbstractBase
{
    abstract public function child();
}

class ConcreteChild extends AbstractChild
{
    public function base()
    {
        echo 'base';
    }

    public function base2() {}

    public function child()
    {
        echo 'child';
    }
}