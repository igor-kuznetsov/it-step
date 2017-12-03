<!doctype html>
<html>
<head>
    <title>Form</title>
</head>
<body>
<div style="margin: 10px 0; padding: 1px 10px; background: #ddd;">
    <?php

    if ($_POST) {
        $form_fields = [
            'user_name',
            'user_comment',
            'user_role',
            'user_newsletter'
        ];

        foreach ($form_fields as $form_field) {
            if (empty($_POST[$form_field])) {
                echo "<p style='color:red'>Error: '$form_field' is required!</p>";
            } else {
                echo '<p>' . $form_field . ': ' . htmlentities($_POST[$form_field]) . '</p>';
            }
        }
    }

    ?>
</div>
<form method="post" action="">
    <input name="user_name" value="<?php
        echo empty($_POST['user_name']) ? '' : $_POST['user_name'];
        ?>" placeholder="Name">
    <br>
    <br>
    <textarea name="user_comment" placeholder="Comment"><?php
        echo empty($_POST['user_comment']) ? '' : $_POST['user_comment'];
        ?></textarea>
    <br>
    <br>
    <select name="user_role">
        <option value="">- Please Select Role -</option>
        <option value="director" <?php
            echo (isset($_POST['user_role']) && $_POST['user_role'] == 'director')
                ? 'selected' : '';
            ?>>Director</option>
        <option value="manager" <?php
            echo (isset($_POST['user_role']) && $_POST['user_role'] == 'manager')
                ? 'selected' : '';
            ?>>Manager</option>
        <option value="client" <?php
            echo (isset($_POST['user_role']) && $_POST['user_role'] == 'client')
                ? 'selected' : '';
            ?>>Client</option>
    </select>
    <br>
    <br>
    <input type="checkbox" name="user_newsletter" <?php
        echo isset($_POST['user_newsletter']) ? 'checked' : '';
        ?> id="user_newsletter">
    <label for="user_newsletter">Sign up for newsletter</label>
    <br>
    <br>
    <input type="submit">
</form>
</body>
</html>

