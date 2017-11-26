<?php

echo 'Какая-нибудь строка.<br>';
echo('еще строка.<br>');

print 'третья строка.<br>';
print('И еще строка строка.<br>');

$abc = 15;
echo $abc;
echo($abc);

echo '<hr>';
var_dump($abc); // выводит значение и тип данных
echo '<hr>';

$name = 'test';

$$name = 20; // значение переменной $test

echo $test; // 20