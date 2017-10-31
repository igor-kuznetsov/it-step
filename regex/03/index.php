<?php

require 'validation.php';
//include 'validation.php';

if ($_POST) {
    $errors = [];

    foreach ($_POST as $key => $value) {
        $errors[$key] = validate_value($value);
    }
}

?><!doctype html>
<html>
<head>
    <title>Form</title>
</head>
<body>
<form method="post" action="">
    <div>
        <input name="test" placeholder="URL" value="<?php echo empty($_POST['test']) ? '' : $_POST['test']; ?>">
        <?php echo empty($errors['test']) ? '' : '<br><span style="color:red">' . $errors['test'] . '</span>'; ?>
    </div>
    <div>
        <input type="submit">
    </div>
</form>
</body>
</html>