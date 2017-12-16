<?php

session_start(); // initializing

if (empty($_SESSION['count'])) {
    $_SESSION['count'] = 1; // creating
} else {
    $_SESSION['count']++; // updating
}

echo $_SESSION['count']; // getting

//unset($_SESSION['count']); // deleting
//$_SESSION = []; // clearing

//unset($_SESSION); // DO NOT DO THIS!!! IT DESTROYS SESSION COMPLETELY