<?php

require_once 'config.php';

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($mysqli->connect_errno) {
    die("Failed to connect: " . $mysqli->connect_error);
}

$sql = "INSERT INTO `products` VALUES (?, ?, ?);";
$statement = $mysqli->prepare($sql);

if (!$statement) {
    die("Preparation failed: " . $mysqli->error);
}

$statement->bind_param("s", $product_name); // string
$statement->bind_param("d", $product_price); // double
$statement->bind_param("i", $product_category); // integer

$product_name = 'Product 1';
$product_price = 128.56;
$product_category = 1;

$statement->execute();


$product_name = 'Product 2';
$product_price = 145.78;
$product_category = 2;
$statement->execute();

$product_name = 'Product 3';
$product_price = 98.12;
$product_category = 3;
$statement->execute();


$statement->close();