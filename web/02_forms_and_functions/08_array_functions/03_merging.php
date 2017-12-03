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
    "e" => "test"
];

$united_arrays = $arr1 + $arr2;
print_r($united_arrays);

$merged_arrays = array_merge($arr1, $arr2);
print_r($merged_arrays);

$combined_arrays = array_combine($arr1, $arr2); // количество элементов должно совпадать!
print_r($combined_arrays);