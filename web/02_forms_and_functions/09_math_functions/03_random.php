<?php

echo rand(10, 22) . "<br>";
echo rand() . "<br>"; // from 0 to max
echo getrandmax() . "<br>"; // max

echo mt_rand(10, 22) . "<br>";
echo mt_rand() . "<br>"; // from 0 to mt_max
echo mt_getrandmax() . "<br>"; // mt_max