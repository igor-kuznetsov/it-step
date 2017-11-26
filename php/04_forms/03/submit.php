<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "<hr>";

foreach ($_POST as $field_name => $field_value) {
    echo "$field_name: $field_value <br>";
}

echo "<hr>";

if (isset($_POST['user_name'])) {
    echo '$_POST["user_name"]: ' . $_POST['user_name'];
}

echo "<hr>";

if ( ! empty($_POST['user_name'])) {
    echo '$_POST["user_name"]: ' . $_POST['user_name'];
}

echo "<hr>";