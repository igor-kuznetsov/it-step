<?php

$user = [
    'name' => 'Vasya',
    'role' => 'manager',
    'permissions' => [
        'create',
        'read',
        'update',
        'delete'
    ]
];

echo "<ul>";

foreach ($user as $key => $value) {
    if (is_array($value)) {
        echo "<li>$key<ul>";

        foreach ($value as $val) {
            echo "<li>$val</li>";
        }

        echo "</ul></li>";
    } else {
        echo "<li>$key: $value</li>";
    }
}

echo "</ul>";