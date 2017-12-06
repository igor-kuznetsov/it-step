<?php

function validate($post, $form_rules)
{
    $errors = [];

    foreach ($form_rules as $field => $field_rules) {
        if (empty($post[$field])) {
            $errors[$field][] = 'Field is required!';
        } else {
            $field_value = $post[$field];

            foreach ($field_rules as $rule_name) {
                $errors[$field][] = $rule_name($field_value);
            }
        }

        $errors[$field] = array_filter($errors[$field]);
    }

    return $errors;
}

function check_error($errors, $field_name)
{
    if (empty($errors[$field_name])) {
        echo 'ok';
    } else {
        echo 'error';
    }
}

function render_error($errors, $field_name)
{
    if (empty($errors[$field_name])) {
        echo '';
    } else {
        echo '<br><span style="color:red">' . implode(' ', $errors[$field_name]) . '</span>';
    }
}

function get_value($values, $field_name)
{
    if (empty($values[$field_name])) {
        return '';
    } else {
        return encode_xss($values[$field_name]);
    }
}

function encode_xss($value)
{
    $value = htmlentities($value);

    return $value;
}

function check_selected($values, $field_name, $value)
{
    if (!empty($values[$field_name]) && $value == $values[$field_name]) {
        echo 'selected="selected"';
    } else {
        echo '';
    }
}

function is_name($value)
{
    if (preg_match('/^[\sa-z]+$/i', $value)) {
        return '';
    } else {
        return 'Name may contain only letters and whitespaces.';
    }
}

function is_email($value)
{
    if (preg_match('/^[a-z\d_-]+@[a-z]+\.[a-z]{2,}$/i', $value)) {
        return '';
    } else {
        return 'Email format is wrong.';
    }
}

function is_phone($value)
{
    if (preg_match('/^[\d]+[\d\s-]+[\d]+$/', $value)) {
        return '';
    } else {
        return 'Phone may contain only digits, whitespaces and dashes.';
    }
}

function bad_words($value)
{
    if (preg_match('/(fuck|bitch|shit|ass)+/i', $value)) {
        return 'Please do not use bad words!';
    } else {
        return '';
    }
}

function is_type($value)
{
    if (preg_match('/^(general|account|payment)+$/', $value)) {
        return '';
    } else {
        return 'You are dirty hacker!';
    }
}