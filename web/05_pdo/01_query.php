<?php

require_once "config.php";

try {
    // opening connection
    $pdo = new PDO(DB_SOURCE, DB_USER, DB_PASS);

    // using connection
    $sql = "SELECT * FROM `products`;";
    $stmt = $pdo->query($sql); // PDOStatement object

    // fetch all results as assoc array
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print("<pre>");
    print_r($results);
    print("</pre>");

    // use foreach to process all results one by one
    print("<hr>");
    foreach ($pdo->query("SELECT * FROM `products` WHERE `price` < 100;") as $row) {
        print("<pre>");
        print_r($row);
        print("</pre>");
    }

    // or use fetch to process each row
    print("<hr>");
    $stmt = $pdo->query("SELECT * FROM `products` ORDER BY `name` DESC LIMIT 2;");
    while ($row = $stmt->fetch()) {
        print("<pre>");
        print_r($row);
        print("</pre>");
    }

    // closing connection
    $stmt = null;
    $pdo = null;
} catch (PDOException $pdoExc) {
    die("PDO exception: " . $pdoExc->getMessage());
} catch (Exception $exc) {
    die("Exception: " . $exc->getMessage());
}

