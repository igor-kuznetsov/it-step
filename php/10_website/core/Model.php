<?php

namespace website\core;

abstract class Model
{
    protected $db;

    public function __construct()
    {
        $this->db = App::getDbConnection();
    }
}