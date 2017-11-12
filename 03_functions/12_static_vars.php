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