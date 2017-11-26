<?php

/*

for (expression1; expression2; expression3) {
   statement1;
   statement2;
}

expression1 - Выполняется один раз в начале цикла.
expression2 - Выполняется перед каждой итерацией.
			  Если принимает значение true, то цикл продолжается.
expression3 - Выполняется в конце каждой итерации.

Каждое выражение может быть пустым
или содержать несколько выражений, разделенных запятыми.

*/

$array = [4, 6, 12, 67, 89, 12];

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . '<br>';
}


for ($i = 0, $c = count($array); empty($array), $i < $c; $i++, $a = $i + $c) {
    echo $a . '<br>';
}


for ( ; ; ) {
    echo 'Test "for" with empty expressions';
    break;
}