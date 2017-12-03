<pre><?php

$arr1 = [
    0 => "sorting",
    "a" => "merging",
    "b" => "other",
    "d" => "searching"
];

$arr2 = [
    0 => "round",
    "a" => "bcmath",
    "c" => "random",
    "e" => "searching"
];

$diff_array = array_diff($arr1, $arr2);
print_r($diff_array);

$intersect_array = array_intersect($arr1, $arr2);
print_r($intersect_array);