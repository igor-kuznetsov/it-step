<?php

$a = 'Первая строка. ';
$b = 'Вторая строка. ';

$c = $a . $b;
$d = $c .  ' Тоже строка. ';
$d = $d . $a . " Еще одна строка. $b";

$d .= ' Строка добавляется к существующей.'; // комбинированный оператор