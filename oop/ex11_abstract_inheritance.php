<?php

abstract class AbstractBase
{
    abstract public function base();
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

    public function child()
    {
        echo 'child';
    }
}