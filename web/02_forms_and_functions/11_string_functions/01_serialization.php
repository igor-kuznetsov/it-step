<pre><?php

$arr = [
    "a" => "sorting",
    "c" => "merging",
    "b" => "other",
    "d" => "searching"
];

$serialized_array = serialize($arr);
echo $serialized_array;

echo "<hr>";

print_r(unserialize($serialized_array));