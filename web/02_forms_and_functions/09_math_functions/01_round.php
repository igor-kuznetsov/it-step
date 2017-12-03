<?php

echo round(33.55) . "<br>"; // 34
echo round(33.55, 0) . "<br>"; // 34
echo round(33.55, 1) . "<br>"; // 33.6
echo round(33.55, -1) . "<br>"; // 30
echo round(33.55, -2) . "<br>"; // 0
echo round(33.55, 1, PHP_ROUND_HALF_UP) . "<br>"; // 33.6
echo round(33.55, 1, PHP_ROUND_HALF_DOWN) . "<br>"; // 33.5

echo ceil(33.55) . "<br>"; // 34

echo floor(33.55) . "<br>"; // 33