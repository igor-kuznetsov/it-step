<!doctype html>
<html>
<head>
    <title>Form</title>
</head>
<body>
<div style="margin: 10px 0; padding: 1px 10px; background: #ddd;">
    <?php

    $regex = "/^[a-zA-Z0-9]{1,}$/";
//    $regex = "/^[a-zA-Z0-9]+$/";
//    $regex = "/^[a-z0-9]+$/i";
//    $regex = "/^[a-z\d]+$/i";

    if ($_POST) {
        if (preg_match($regex, $_POST['test'])) {
            echo '<span style="color:green">OK</span>';
        } else {
            echo '<span style="color:red">Error: only letters and numbers are allowed!</span>';
        }
    }

    ?>
</div>
<form method="post" action="">
    <input name="test" placeholder="Letters and Numbers" value="<?php echo empty($_POST['test']) ? '' : $_POST['test']; ?>">
    <br>
    <br>
    <input type="submit">
</form>
</body>
</html>