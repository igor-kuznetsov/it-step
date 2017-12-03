<?php

$date1 = "July 2, 2008 8.21PM";
$date2 = "4/11/2011 6:33";

var_dump($date1 > $date2); // string comparison - WRONG
echo "<br>";
var_dump(strtotime($date1) > strtotime($date2)); // time comparison - CORRECT