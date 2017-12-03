<?php

$my_var = 10;

function my_func()
{
    global $my_var;

    $my_var = 15;

    echo $my_var;
}

my_func(); // 15

echo $my_var; // 15