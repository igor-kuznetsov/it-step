<?php

$str = "Lorem ipsum dolor sit amet ipsum lor.";

echo str_replace("ipsum", "", $str) . "<br>";
echo str_replace([" ", "."], ["-", ""], $str) . "<br>";
echo str_ireplace("lor", "L", $str) . "<br>";