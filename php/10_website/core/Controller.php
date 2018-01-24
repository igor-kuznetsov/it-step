<?php

namespace website\core;

abstract class Controller
{
    protected $data = [];
    protected $model;
    protected $params;

    public function __construct()
    {
        $this->params = App::getRouter()->getParams();
    }

    public function getData()
    {
        return $this->data;
    }
}