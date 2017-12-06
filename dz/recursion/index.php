<?php

$arr = [34, 56, 78, 0, [5, 7, 8, [56, 78, 90]], 89, [67, 45]];

function my_print_r($array, $level = 0)
{
    echo 'Array' . PHP_EOL;
    echo str_repeat("    ", 2 * $level);
    echo '(' . PHP_EOL;

    // 0,1
    // 2,3
    // 4,5

    foreach ($array as $key => $value) {
        echo str_repeat("    ", 2 * $level + 1);
        echo "[$key] => ";

        if (is_array($value)) {
            $level++;
            my_print_r($value, $level);
            $level--;
        } else {
            echo $value;
        }

        echo PHP_EOL;
    }

    echo str_repeat("    ", 2 * $level);
    echo ')';
}

print "<pre>";
print_r($arr);
my_print_r($arr);
print "</pre>";