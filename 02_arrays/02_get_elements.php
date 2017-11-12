<?php

$user = [
    'name' => 'Vasya',
    'permissions' => [
        'read',
        'create'
    ]
];

echo $user['name']; // 'Vasya'
echo $user{'name'}; // 'Vasya'

$key = 'name';

echo $user[$key]; // 'Vasya'

echo $user['permissions'][1]; // 'create'

echo $user['role']; // ОШИБКА! элемент массива не определен