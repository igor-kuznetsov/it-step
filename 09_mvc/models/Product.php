<?php

namespace models;

use core\Model;

class Product extends Model
{
    public function getList()
    {
        return $this->db->query("SELECT * FROM `products`;");
    }

    public function getById($id)
    {
        $id = (int) $id;
        $result = $this->db->query("SELECT * FROM `products` WHERE `id` = $id;");

        return empty($result[0]) ? [] : $result[0];
    }
}