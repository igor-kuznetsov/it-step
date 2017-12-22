<?php

namespace models;

use core\Model;

class Category extends Model
{
    public function getList()
    {
        return $this->db->query("SELECT * FROM `categories`;");
    }
}