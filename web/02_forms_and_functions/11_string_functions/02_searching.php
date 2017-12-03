<?php

$str = "Lorem ipsum dolor sit amet ipsum lor.";

$position_of_first = strpos($str, "ipsum");
echo $position_of_first . "<br>";

$position_of_last = strrpos($str, "ipsum");
echo $position_of_last . "<br>";

echo stripos($str, "lor"); // регистронезависмый