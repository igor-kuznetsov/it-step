<?php

namespace mvc\core;

abstract class Model
{
    protected $db;

    public function __construct()
    {
        $this->db = App::getDbConnection();
    }
}