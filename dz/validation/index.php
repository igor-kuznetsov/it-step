<?php

require 'functions.php';

$options = [
    '' => '- Select Question Type -',
    'general' => 'General Questions',
    'account' => 'Account Questions',
    'payment' => 'Payment Questions'
];

if ($_POST) {
    $form_rules = [
        'name' => [
            'is_name',
            'bad_words'
        ],
        'email' => [
            'is_email',
            'bad_words'
        ],
        'phone' => [
            'is_phone'
        ],
        'message' => [
            'bad_words'
        ],
        'type' => [
            'is_type'
        ],
    ];

    $errors = validate($_POST, $form_rules);
} else {
    $errors = [];
}

?><!doctype html>
<html>
<head>
    <title>Form</title>
    <style>
        .error {
            border: 2px solid red;
        }
    </style>
</head>
<body>
<form method="post" action="">
    <input name="name" placeholder="Name"
           class="field <?php check_error($errors, 'name'); ?>"
           value="<?php echo get_value($_POST, 'name'); ?>">
    <?php render_error($errors, 'name'); ?>
    <br><br>

    <input name="email" placeholder="Email"
           class="field <?php check_error($errors, 'email'); ?>"
           value="<?php echo get_value($_POST, 'email'); ?>">
    <?php render_error($errors, 'email'); ?>
    <br><br>

    <input name="phone" placeholder="Phone"
           class="field <?php check_error($errors, 'phone'); ?>"
           value="<?php echo get_value($_POST, 'phone'); ?>">
    <?php render_error($errors, 'phone'); ?>
    <br><br>

    <textarea name="message"
              class="field <?php check_error($errors, 'message'); ?>"
    ><?php echo get_value($_POST, 'message'); ?></textarea>
    <?php render_error($errors, 'message'); ?>
    <br><br>

    <select name="type" class="field <?php check_error($errors, 'type'); ?>">
        <?php foreach ($options as $value => $label) : ?>
            <option value="<?php echo $value; ?>" <?php check_selected($_POST, 'type', $value); ?>>
                <?php echo $label; ?>
            </option>
        <?php endforeach; ?>
    </select>
    <?php render_error($errors, 'type'); ?>
    <br><br>

    <div>
        <input type="submit">
    </div>
</form>
</body>
</html>