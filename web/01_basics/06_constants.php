<?php

define('NAME_OF_CONSTANT', 'значение константы');
define('CoNsTaNt_1', 555); // можно и такое имя, но лучше все заглавные буквы
const MY_CONSTANT = 15; // можно и так, но обычно используют только в ООП

echo NAME_OF_CONSTANT;

echo '<hr>';
echo PHP_VERSION; // предопределенная константа
echo '<br>';
echo __DIR__; // “магическая” константа; путь к текущему каталогу
echo '<br>';
echo __FILE__; // “магическая” константа; путь к текущему файлу