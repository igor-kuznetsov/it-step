<?php

$array = [34, 6, 12, 78, 23, 99];

foreach ($array as $value) {
    echo $value . '<br>';
}

$settings = [
    'user' => 'Vasya',
    'role' => 'manager',
    'crystals' => 237
];

foreach ($settings as $key => $val) {
    echo "$key = $val<br>";
}