<?php

function test()
{
    echo 'My test function';
}

function my_func_1()
{
    echo __FUNCTION__;
}


if ( ! empty($_POST['function_name'])) {
    $my_function = $_POST['function_name'];
    if (function_exists($my_function)) {
        $my_function();
    }
}