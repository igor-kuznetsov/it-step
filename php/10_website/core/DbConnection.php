<?php

namespace website\core;

use Exception;
use mysqli;

class DbConnection
{
    private $mysqli;

    public function __construct($host, $user, $pass, $name)
    {
        $this->mysqli = new mysqli($host, $user, $pass, $name);

        if ($this->mysqli->connect_errno) {
            throw new Exception($this->mysqli->connect_error);
        }
    }

    public function query($sql)
    {
        if (empty($this->mysqli)) {
            return false;
        }

        $result = $this->mysqli->query($sql);

        if ($this->mysqli->errno) {
            throw new Exception($this->mysqli->error);
        }

        if (is_bool($result)) {
            return $result;
        }

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }

    public function escape($string)
    {
        return $this->mysqli->real_escape_string($string);
    }
}