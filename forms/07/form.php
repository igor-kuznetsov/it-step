<?php

function process_form_field($field_name, $form_data)
{
    if (empty($form_data[$field_name])) {
        $result = "<p style='color:red'>Error: '$field_name' is required!</p>";
    } else {
        $result = '<p>' . $field_name . ': ' . encode_xss($form_data[$field_name]) . '</p>';
    }

    return $result;
}

function encode_xss($value)
{
    $value = htmlentities($value);

    return $value;
}

function remove_xss($value)
{
    $value = strip_tags($value, '<b><i><u><em><strong>');

    return $value;
}

?><!doctype html>
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
            'user_gender',
            'user_newsletter'
        ];

        foreach ($form_fields as $form_field) {
            echo process_form_field($form_field, $_POST);
        }
    }

    ?>
</div>
<form method="post" action="">
    <input name="user_name" value="Vasya" placeholder="Name" disabled="disabled">
    <br>
    <br>
    <textarea name="user_comment" placeholder="Comment"><?php
        echo empty($_POST['user_comment']) ? 'Default value for textarea field' : $_POST['user_comment'];
        ?></textarea>
    <br>
    <br>
    <select name="user_role">
        <option value="">- Please Select Role -</option>
        <option value="director" <?php echo (isset($_POST['user_role']) && $_POST['user_role'] == 'director') ? 'selected="selected"' : ''; ?>>
            Director
        </option>
        <option value="manager" <?php echo (isset($_POST['user_role']) && $_POST['user_role'] == 'manager') ? 'selected="selected"' : ''; ?>>
            Manager
        </option>
        <option value="client" <?php echo (isset($_POST['user_role']) && $_POST['user_role'] == 'client') ? 'selected="selected"' : ''; ?>>
            Client
        </option>
    </select>
    <br>
    <br>
    <label for="user_gender_male">Male</label>
    <input type="radio" name="user_gender" value="male" id="user_gender_male" <?php echo (isset($_POST['user_gender']) && $_POST['user_gender'] == 'male') ? 'checked="checked"' : ''; ?>>
    <label for="user_gender_female">Female</label>
    <input type="radio" name="user_gender" value="female" id="user_gender_female" <?php echo (isset($_POST['user_gender']) && $_POST['user_gender'] == 'female') ? 'checked="checked"' : ''; ?>>
    <br>
    <br>
    <input type="checkbox" name="user_newsletter" id="user_newsletter" <?php echo isset($_POST['user_newsletter']) ? 'checked="checked"' : ''; ?>>
    <label for="user_newsletter">Sign up for newsletter</label>
    <br>
    <br>
    <input type="submit">
</form>
</body>
</html>

