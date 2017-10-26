<?php

function increment()
{
    static $a = 1;

    echo $a;

    $a++;
}

increment();
increment();
increment();