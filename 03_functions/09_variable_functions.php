<?php

$my_func_name = 'echo_text';

$my_func_name('Test'); // echo_text('Test');

function echo_text($string)
{
    echo $string;
}