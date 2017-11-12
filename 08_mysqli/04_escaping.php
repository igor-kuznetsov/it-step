<?php

include_once 'config.local.php';
require_once 'config.php';

?><!doctype html>
<html>
<head>
    <title>Form</title>
</head>
<body>
<div style="margin: 10px 0; padding: 1px 10px; background: #ddd;">
    <?php

    if (isset($_POST['name'])) {
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($mysqli->connect_errno) {
            die("Failed to connect: " . $mysqli->connect_error);
        }

        $name = $mysqli->real_escape_string($_POST['name']);

        $res = $mysqli->query("SELECT * FROM `products` WHERE `name` = '$name';");

        if ($mysqli->errno) {
            die("DB error: " . $mysqli->error);
        }

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        echo "<pre>";
        print_r($data);
    }

    ?>
</div>
<form method="post" action="">
    <input name="name" value="">
    <br>
    <br>
    <input type="submit">
</form>
</body>
</html>
