<?php

header("Content-type: image/png");
$btn_name = "TEST";
$img = imagecreatefrompng("img/empty-button.png");
$orange = imagecolorallocate($img, 255, 255, 255);
$px = (imagesx($img) - 7.5 * strlen($btn_name)) / 2;
imagestring($img, 3, $px, 9, $btn_name, $orange);
imagepng($img);
imagedestroy($img);