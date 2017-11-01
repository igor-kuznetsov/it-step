<?php

class WebsiteUser
{
    public $login;
    protected $password = '1qaz2wsx';

    public function login()
    {
        echo 'login';
    }
}

class AdminUser extends WebsiteUser
{
    public function getPassword()
    {
        return $this->password;
    }
}

$admin = new AdminUser();

$admin->login();

echo '<hr>';
echo $admin->getPassword();

echo '<hr>';
$user = new WebsiteUser();

echo $user->getPassword(); // Error