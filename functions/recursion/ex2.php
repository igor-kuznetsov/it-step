<?php

$arr = [34, 56, 78, 0, [5, 7, 8, [56, 78, 90]]];

echo count_r($arr);

function count_r($array, $count = 0)
{
    foreach ($array as $value) {
        ++$count;
        if (is_array($value)) {
            $count = count_r($value, $count);
        }
    }

    return $count;
}