<?php

require 'validation.php';

if ($_POST) {
    $rules = [
        'test' => [
            'is_required' => null,
            'is_number' => null,
            'greater_than' => 5
        ]
    ];

    $errors = validate($_POST, $rules);
}

?><!doctype html>
<html>
<head>
    <title>Form</title>
</head>
<body>
<form method="post" action="">
    <div>
        <input name="test" placeholder="Number Greater Than 5" value="<?php echo empty($_POST['test']) ? '' : $_POST['test']; ?>">
        <?php echo empty($errors['test']) ? '' : render_error($errors['test']); ?>
    </div>
    <div>
        <input type="submit">
    </div>
</form>
</body>
</html>