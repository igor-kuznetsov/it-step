<?php

function process_form_field($field_name, $form_data)
{
    if (empty($form_data[$field_name])) {
        $result = "<p style='color:red'>Error: '$field_name' is required!</p>";
    } else {
        $result = '<p>' . $field_name . ': ' . $form_data[$field_name] . '</p>';
    }

    return $result;
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
    <textarea name="user_comment" placeholder="Comment">Default value for textarea field</textarea>
    <br>
    <br>
    <select name="user_role">
        <option value="">- Please Select Role -</option>
        <option value="director" selected="selected">Director</option>
        <option value="manager">Manager</option>
        <option value="client">Client</option>
    </select>
    <br>
    <br>
    <label for="user_gender_male">Male</label>
    <input type="radio" name="user_gender" value="male" id="user_gender_male" checked="checked">
    <label for="user_gender_female">Female</label>
    <input type="radio" name="user_gender" value="female" id="user_gender_female">
    <br>
    <br>
    <input type="checkbox" name="user_newsletter" id="user_newsletter" checked="checked">
    <label for="user_newsletter">Sign up for newsletter</label>
    <br>
    <br>
    <input type="submit">
</form>
</body>
</html>

