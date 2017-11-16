<?php

use core\App;
use core\Config;

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
        </ul>
    </div>
</nav>

<div>
    <?php echo $data['content']; ?>
</div>

</body>
</html>