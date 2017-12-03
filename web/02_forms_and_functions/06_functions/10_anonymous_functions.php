<?php

$my_function('Igor'); // ОШИБКА! функция не определена!

$my_function = function ($name)
{
    echo "Hello, $name!";
};

$my_function('Igor'); // Hello, Igor!