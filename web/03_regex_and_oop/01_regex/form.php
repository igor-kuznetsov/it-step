<!doctype html>
<html>
<head>
    <title>Form</title>
    <style>
        .validation {
            margin: 10px 0;
            padding: 1px 10px;
            background: #ddd;
        }
    </style>
</head>
<body>
<div class="validation">
<?php

if ($_POST) {
    $phone_regex = "/^\+38\s\([\d]{3}\)\s[\d]{3}-[\d]{2}-[\d]{2}$/";
    if (preg_match($phone_regex, $_POST['phone'])) {
        echo '<p style="color:green">Phone: OK</p>';
    } else {
        echo '<p style="color:red">Phone: Incorrect phone format!</p>';
    }
}

?>
</div>
<form method="post" action="">
    <input name="phone" placeholder="Phone">
    <br>
    <small>+38 (XXX) XXX-XX-XX</small>
    <br><br>
    <input type="submit">
</form>
</body>
</html>