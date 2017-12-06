<?php

if ($_POST) {
    $login_regex = "/^[a-zA-Z]+$/";
    if (preg_match($login_regex, $_POST['login'])) {
        echo '<p style="color:green">Login: OK</p>';
    } else {
        echo '<p style="color:red">Login: Only letters are allowed!</p>';
    }

    $name_regex = "/^[a-z\s]+$/i";
    if (preg_match($name_regex, $_POST['full_name'])) {
        echo '<p style="color:green">Full Name: OK</p>';
    } else {
        echo '<p style="color:red">Full Name: Only letters and spaces are allowed!</p>';
    }

    $phone_regex = "/^[\d]+[\d\s-]+[\d]+$/";
    if (preg_match($phone_regex, $_POST['phone'])) {
        echo '<p style="color:green">Phone: OK</p>';
    } else {
        echo '<p style="color:red">Phone: Only digits, spaces and hyphens are allowed!</p>';
    }

    $url_regex = "/^https?:\/\/[a-z\d\.-]+\.[a-z\.]{2,6}[\/\.\w-]*\/?$/i";
    if (preg_match($url_regex, $_POST['website'])) {
        echo '<p style="color:green">Website: OK</p>';
    } else {
        echo '<p style="color:red">Website: Only URLs are allowed!</p>';
    }

    $role_regex = "/^(manager|developer|qa)+$/";
    if (preg_match($role_regex, $_POST['role'])) {
        echo '<p style="color:green">Role: OK</p>';
    } else {
        echo '<p style="color:red">Role: Please select one of the options!</p>';
    }
}