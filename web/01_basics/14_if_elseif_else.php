<?php

$a = 5;

if ($a > 8 && $a < 100) {
    echo '8 < $a < 100'; // этот блок не выполнится
} elseif ($a == 4) {
    echo '$a = 4'; // этот блок не выполнится
} elseif ($a < 6) {
    // выполняется первое совпавшее условие
    echo '$a < 6';
} elseif ($a == 5) {
    echo '$a = 5'; // $a = 5, но этот блок уже не выполнится
} else {
    echo 'test'; // и этот блок не выполнится
}