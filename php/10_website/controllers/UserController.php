<?php

namespace website\controllers;

use website\core\Config;
use website\core\Controller;
use website\core\Router;
use website\core\Session;
use website\models\User;

class UserController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new User();
    }

    public function login()
    {
        if ($_POST) {
            $errors = [];

            if (empty($_POST['login'])) {
                $errors[] = 'Login is required';
            }

            if (empty($_POST['password'])) {
                $errors[] = 'Password is required';
            }

            if (empty($errors)) {
                $user = $this->model->getByLogin($_POST['login']);
                $hash = $this->hashPassword($_POST['password']);

                if (!empty($user) && $hash == $user['password']) {
                    unset($user['password']);
                    Session::set('user', $user);
                    Router::redirect('/user');
                } else {
                    Session::set('errors', 'Login or password do not match');
                }
            } else {
                Session::set('errors', '<strong>Validation errors</strong>:<br>'.implode('<br>', $errors));
            }
        }
    }

    public function logout()
    {
        Session::clear('user');
        Router::redirect('/');
    }

    public function index()
    {
        $user = Session::get('user');

        if (empty($user)) {
            Router::redirect('/user/login');
        }

        $this->data['user'] = $user;
    }

    private function hashPassword($password)
    {
        return md5(Config::get('salt') . $password);
    }
}