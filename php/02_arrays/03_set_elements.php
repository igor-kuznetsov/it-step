<?php

$user = [
    'name' => 'Vasya',
    'permissions' => ['read', 'create']
];

$user['name'] = 'Sasha'; // редактирование существующего элемента массива

$user[] = 'new value'; // добавление нового элемента массива

unset($user['permissions']); // удаление существующего элемента массива

$test[] = 'some value'; // создание нового массива (потому что $test не был ранее определен)