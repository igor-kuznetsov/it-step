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