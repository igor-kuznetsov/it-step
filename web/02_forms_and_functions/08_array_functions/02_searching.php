<?php

$arr = [
    "a" => "sorting",
    "c" => "merging",
    "b" => "other",
    "d" => "searching"
];

$key_of_value = array_search("merging", $arr);
$key_exists = array_key_exists("b", $arr);
$value_exists = in_array("other", $arr);