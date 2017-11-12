<?php

include_once 'config.local.php';
require_once 'config.php';

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($mysqli->connect_errno) {
    die("Failed to connect: " . $mysqli->connect_error);
}

echo $mysqli->host_info;