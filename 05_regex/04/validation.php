<?php

function validate($post, $form_rules)
{
    $errors = [];

    foreach ($form_rules as $field => $field_rules) {
        if (isset($post[$field])) {
            $field_value = $post[$field];

            foreach ($field_rules as $rule_name => $rule_param) {
                if (is_null($rule_param)) {
                    $errors[$field][] = $rule_name($field_value);
                } else {
                    $errors[$field][] = $rule_name($field_value, $rule_param);
                }
            }
        } else {
            $errors[$field][] = 'Field is missing';
        }

        $errors[$field] = array_filter($errors[$field]);
    }

    return $errors;
}

function is_required($field)
{
    if (empty($field)) {
        $error = 'Field is required!';
    } else {
        $error = '';
    }

    return $error;
}

function is_number($field)
{
    $error = '';

    if (!preg_match('/^[\d]+$/', $field)) {
        $error = 'Only digits are allowed!';
    }

    return $error;
}

function greater_than($field, $value)
{
    $error = '';

    if ($field <= $value) {
        $error = 'Must be greater than ' . $value;
    }

    return $error;
}

function render_error($error)
{
    return '<br><span style="color:red">' . implode(' ', $error) . '</span>';
}