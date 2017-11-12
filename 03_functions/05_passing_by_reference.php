<?php

function format_my_text(&$string)
{
    $uppercase = strtoupper($string);
    $string = "<h2>$uppercase</h2>";
}

$text = 'My text';

format_my_text($text);

echo $text; // '<h2>MY TEXT</h2>'