<?php

namespace website\models;

use website\core\Model;

class Product extends Model
{
    public function getList()
    {
        return $this->db->query("SELECT * FROM `products`;");
    }

    public function getListByCategory($id)
    {
        if (empty($id)) {
            return $this->db->query("SELECT * FROM `products`;");
        } else {
            return $this->db->query("SELECT * FROM `products` WHERE `category_id` = $id;");
        }
    }

    public function getById($id)
    {
        $id = (int) $id;
        $result = $this->db->query("SELECT * FROM `products` WHERE `id` = $id;");

        return empty($result[0]) ? [] : $result[0];
    }
}