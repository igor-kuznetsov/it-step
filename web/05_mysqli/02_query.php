<?php

require_once 'config.php';

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($mysqli->connect_errno) {
    die("Failed to connect: " . $mysqli->connect_error);
}

$sql = "SELECT * FROM `products`;";

$result = $mysqli->query($sql); // mysql_result object

if ($mysqli->errno) {
    die("DB error: " . $mysqli->error);
}

if (is_bool($result)) {
    echo $result ? 'Query completed successfully!' : 'Query failed!';
} else {
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    echo "<pre>";
    print_r($data);
}