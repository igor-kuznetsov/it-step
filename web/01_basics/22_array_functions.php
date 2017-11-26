<?php

$options = [
    'label' => 'Text',
    'color' => 'red',
    'text' => 'Text'
];

echo array_shift($options); // извлекает первый элемент из массива

echo count($options); // возвращает количество элементов массива

var_dump(array_key_exists('color', $options)); // проверяет есть ли ключ в массиве

print_r(array_unique($options)); // возвращает массив без повторяющихся значений

print_r(array_values($options)); // возвращает индексный массив значений переданного массива

var_dump(in_array('red', $options)); // проверяет есть ли значение в массиве

echo implode('|', $options); // соединяет значения массива в строку с помощью разделителя