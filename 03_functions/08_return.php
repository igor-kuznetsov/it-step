<?php

function my_func_1($x, $y)
{
    echo $x + $y;
}

$result = my_func_1(10, 5); // 15

var_dump($result); // null


function my_func_2($x, $y)
{
    $sum = $x + $y;

    return $sum;
}

$result = my_func_2(10, 5);

echo $result; // 15
