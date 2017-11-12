<?php

$options = [
    'color' => 'red',
    'width' => '2px'
];

echo $options; // выведет на экран слово Array

echo '<pre>'; // для "красивого" форматирования вывода с отступами и переводами строк

print_r($options); // выведет массив

var_dump($options); // выведет массив с типами данных