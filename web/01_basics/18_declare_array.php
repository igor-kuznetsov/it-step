<?php

$products = array();
$products = [];

$products = array(
    0 => 'Product #1',
    1 => 'Product #2',
    2 => 'Product #3'
);

$products = [
    0 => 'Product #1',
    1 => 'Product #2',
    2 => 'Product #3'
];

$products = [
    'Product #1',
    'Product #2',
    'Product #3'
];

$settings = [
    'user' => 'Vasya',
    'password' => 'qwe123',
    'role' => 'manager',
    'permissions' => [
        'read',
        'create',
        4 => 'update_own',
        'delete_own'
    ]
];