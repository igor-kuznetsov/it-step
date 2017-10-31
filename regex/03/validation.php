<?php

function validate_value($value)
{
    if (preg_match('/^https?:\/\/[a-z\d\.-]+\.[a-z\.]{2,6}([\/\w\s\.-]*)*\/?$/', $value)) {
        $error = '';
    } else {
        $error = 'Wrong URL format';
    }

    return $error;
}