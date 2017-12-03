<?php

function test_recursion($a)
{
    echo $a;

    $a--;

    if ($a > 0) {
        test_recursion($a);
    }
}

test_recursion(9);

echo '<hr>';

function count_r($array, $count = 0)
{
    foreach ($array as $value) {
        $count++;
        if (is_array($value)) {
            $count = count_r($value, $count);
        }
    }

    return $count;
}

echo count_r([10, 5, 8, 12, 45, [45, 67, 90, [34, 565, 121]]]); // 13