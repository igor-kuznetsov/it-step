<?php

require_once 'config.php';

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($mysqli->connect_errno) {
    die("Failed to connect: " . $mysqli->connect_error);
}

$sql = "INSERT INTO `products` (`name`,`price`,`category_id`) VALUES (?, ?, ?);";
$statement = $mysqli->prepare($sql);

if (!$statement) {
    die("Preparation failed: " . $mysqli->error);
}

if (!$statement->bind_param("sdi", $product_name, $product_price, $product_category)) {
    die("Binding parameters failed: " . $statement->error);
}

$product_name = 'Product 1';
$product_price = 128.56;
$product_category = 1;

if (!$statement->execute()) {
    die("Execute failed: " . $statement->error);
}


$product_name = 'Product 2';
$product_price = 145.78;
$product_category = 2;

if (!$statement->execute()) {
    die("Execute failed: " . $statement->error);
}


$product_name = 'Product 3';
$product_price = 98.12;
$product_category = 3;

if (!$statement->execute()) {
    die("Execute failed: " . $statement->error);
}

$statement->close();

echo "OK";