<?php

namespace website\models;

use website\core\Model;

class User extends Model
{
    public function getByLogin($login)
    {
        $login = $this->db->escape($login);
        $sql = "SELECT * FROM `users` WHERE `login` = '$login';";
        $result = $this->db->query($sql);

        return isset($result[0]) ? $result[0] : null;
    }
}