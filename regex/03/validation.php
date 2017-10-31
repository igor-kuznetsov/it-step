<?php

function validate_value($value)
{
    $pattern = '/^https?:\/\/[a-z\d\.-]+\.[a-z\.]{2,6}([\/\s\.\w-]*)*\/?$/i';
    // http://mystat.istep.ua/hghg/hgh/

    if (preg_match($pattern, $value)) {
        $error = '';
    } else {
        $error = 'Wrong URL format';
    }

    return $error;
}