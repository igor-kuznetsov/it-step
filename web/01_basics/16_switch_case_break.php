<?php

$a = 3;

switch ($a) {
    case 1:
        echo '$a = 1';
    case 3:
        echo '$a = 3';
    case 5:
        echo '$a = 5';
    case 7:
        echo '$a = 7';
}

echo '<hr>';

$b = 3;

switch ($b) {
    case 1:
        echo '$b = 1';
        break;
    case 3:
    case 4:
        echo '$b = 3';
        break;
    case 5:
        echo '$b = 5';
        break;
    case 7:
        echo '$b = 7';
        break;
}