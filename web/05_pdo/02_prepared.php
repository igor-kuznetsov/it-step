<?php

require_once "config.php";


try {
    $pdo = new PDO(DB_SOURCE, DB_USER, DB_PASS);

    // using named placeholders
    $sql = "INSERT INTO `products` (`name`, `price`, `category_id`) 
              VALUES (:name, :price, :category);";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $productName);
    $stmt->bindParam(':price', $productPrice);
    $stmt->bindParam(':category', $productCategoryId);

    $productName = 'GPS Navigator';
    $productPrice = 59.99;
    $productCategoryId = 3;
    $stmt->execute();

    $stmt->execute([
        ':name' => 'Rocket Launcher',
        ':price' => 2099.99,
        ':category' => 2
    ]);

    $stmt->execute([
        'name' => 'Teddy Bear',
        'price' => 19.50,
        'category' => 1
    ]);

    // using positional placeholders
    $sql = "INSERT INTO `products` (`name`, `price`, `category_id`) VALUES (?, ?, ?);";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $productName);
    $stmt->bindParam(2, $productPrice);
    $stmt->bindParam(3, $productCategoryId);

    $productName = 'Something New';
    $productPrice = 999.99;
    $productCategoryId = 1;
    $stmt->execute();

    $stmt = null;
    $pdo = null;
} catch (PDOException $pdoExc) {
    die("PDO exception: " . $pdoExc->getMessage());
} catch (Exception $exc) {
    die("Exception: " . $exc->getMessage());
}