<?php

$img = imagecreatefromjpeg('img/photo.jpeg');

$watermark = imagecreatetruecolor(80, 50);
$white = imagecolorallocate($img, 255, 255, 255);
$red = imagecolorallocate($img, 255, 0, 0);
imagefilledrectangle($watermark, 0, 0, 80, 50, $red);
imagefilledrectangle($watermark, 10, 10, 70, 40, $white);
imagestring($watermark, 5, 30, 17, 'GD', $red);

imagecopymerge(
    $img,
    $watermark,
    imagesx($img) - imagesx($watermark) - 10,
    imagesy($img) - imagesy($watermark) - 10,
    0,
    0,
    imagesx($watermark),
    imagesy($watermark),
    50
);

header("Content-type: image/png");
imagepng($img);
imagedestroy($img);