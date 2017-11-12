<?php

function increment()
{
    static $a = 1;

    echo $a;

    $a++;
}

increment(); // 1
increment(); // 2
increment(); // 3

echo '<hr>';

function static_and_recursion($reset = false)
{
    static $count = 0;

    if ($reset) {
        $count = 0;
    }

    echo $count;
    $count++;

    if ($count < 5) {
        static_and_recursion();
    }
}

static_and_recursion();
static_and_recursion(true);