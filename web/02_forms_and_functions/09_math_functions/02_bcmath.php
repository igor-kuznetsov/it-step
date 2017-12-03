<?php

echo bcadd('1.235', '2') . "<br>"; // 3
echo bcadd('1.235', '2', 2) . "<br>"; // 3.23
echo bcadd('1.235', '2', 4) . "<br>"; // 3.2350

echo bcsub('3.21', '1') . "<br>"; // 2
echo bcsub('3.21', '1', 1) . "<br>"; // 2.2
echo bcsub('3.21', '1', 3) . "<br>"; // 2.210

echo bcmul('3.21', '2') . "<br>"; // 6
echo bcmul('3.21', '2', 1) . "<br>"; // 6.4
echo bcmul('3.21', '2', 3) . "<br>"; // 6.420

echo bcdiv('3.21', '2') . "<br>"; // 1
echo bcdiv('3.21', '2', 1) . "<br>"; // 1.6
echo bcdiv('3.21', '2', 3) . "<br>"; // 1.605

echo bcmod('3.21', '2') . "<br>"; // 1 (before 7.2.0), 1.21 (since 7.2.0)

echo bcpow('3.21', '2') . "<br>"; // 10
echo bcpow('3.21', '2', 1) . "<br>"; // 10.3
echo bcpow('3.21', '2', 3) . "<br>"; // 10.304