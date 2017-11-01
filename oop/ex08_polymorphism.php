<?php

class SimpleUser
{
    public function login()
    {
        echo 'user login';
    }
}

class ManagerUser extends SimpleUser
{
    public function login()
    {
        echo 'manager login';
    }
}

$user = new SimpleUser();
$user->login();

echo '<hr>';

$manager = new ManagerUser();
$manager->login();