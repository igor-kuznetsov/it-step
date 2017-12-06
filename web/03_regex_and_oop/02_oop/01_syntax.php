<?php

namespace web\oop;

class DataBase
{
    public function checkUser($login, $password)
    {
        return true;
    }
}

class User
{
    public $firstName = '';
    public $lastName = '';
    protected $login;
    protected $password;
    private $db;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
        $this->db = new DataBase();
    }

    public function getFullName()
    {
        return implode(' ', array_filter([
            $this->firstName,
            $this->lastName
        ]));
    }

    public function login()
    {
        if ($this->checkAccess()) {
            echo 'website login';
        } else {
            echo 'access denied';
        }
    }

    protected function checkAccess()
    {
        return $this->db->checkUser($this->login, $this->password);
    }
}

class Admin extends User
{
    public function login()
    {
        if ($this->checkAccess()) {
            echo 'admin panel login';
        } else {
            echo 'access denied';
        }
    }
}

$user1 = new User('test1', 'qwerty123');
$user2 = new User('test2', '1qaz2wsx');
$admin = new Admin('root', 'admin123');

$user1->login();
$user2->login();
$admin->login();

echo '<hr>';

$user1->firstName = 'John';
echo $user1->getFullName();
echo '<br>';

$user3 = clone $user1;
$user3->firstName = 'Dave';
$user1->lastName = 'Johnson';
echo $user3->getFullName();