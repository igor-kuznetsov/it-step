<?php

define('NAME_OF_CONSTANT', 'значение константы');
define('CoNsTaNt_1', 555); // можно и такое имя, но лучше все заглавные буквы

//PI = 3.14;

echo NAME_OF_CONSTANT;

define('PI', 3.14);

echo '<hr>';
echo PHP_VERSION; // предопределенная константа
echo '<br>';
echo __LINE__; // “магическая” константа; номер текущей строки
echo '<br>';
echo __FILE__; // “магическая” константа; путь к текущему файлу