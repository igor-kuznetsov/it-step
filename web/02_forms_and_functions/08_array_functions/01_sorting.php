<pre><?php

$arr = [
    "a" => "sorting",
    "c" => "merging",
    "b" => "other",
    "d" => "searching"
];

asort($arr); // сортирует массив по значениям, сохраняя ключи
//arsort($arr); // то же самое, но в обратном порядке

//ksort($arr); // сортирует массив по ключам
//krsort($arr); // то же самое, но в обратном порядке

//sort($arr); // сортирует массив по значениям, назначая новые ключи
//rsort($arr); // то же самое, но в обратном порядке

//shuffle($arr); // сортирует в случайном порядке, назначая новые ключи

//uasort($arr, function ($x, $y) { return 1; }); // сортирует по значениям, сохраняя ключи
//uksort($arr, function ($x, $y) { return -1; }); // сортирует по ключам
//usort($arr, function ($x, $y) { return 0; }); // сортирует по значениям, назначая новые ключи

print_r($arr);