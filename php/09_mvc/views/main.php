<?php

use mvc\core\App;
use mvc\core\Config;
use mvc\core\Session;

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo Config::get('site_name'); ?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<nav>
    <div>
        <a href="/"><?php echo Config::get('site_name'); ?></a>
    </div>
    <div>
        <ul>
            <li <?php echo App::getRouter()->getController() == 'index' ? 'class="active"' : ''; ?>>
                <a href="/">Home</a>
            </li>
            <li <?php echo App::getRouter()->getController() == 'products' ? 'class="active"' : ''; ?>>
                <a href="/products">Products</a>
            </li>
            <li>
                <a href="/user">Profile</a>
            </li>
            <?php if (Session::has('user')) : ?>
                <li>
                    <a href="/user/logout">Logout</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<div>
    <?php if (Session::has('errors')) : ?>
        <div class="errors">
            <?php echo Session::get('errors'); ?>
            <?php Session::clear('errors'); ?>
        </div>
    <?php endif; ?>
    <?php echo $data['content']; ?>
</div>

</body>
</html>