<?php

$img = @imagecreatetruecolor(100, 30);

if ($img) {
    $btn_color = imagecolorallocate($img, 200, 179, 160);
    imagefill($img, 0, 0, $btn_color);

    $font_size = 3;
    $text_color = imagecolorallocate($img, 50, 50, 50);
    $btn_text = "SUBMIT";
    $x = (imagesx($img) - 7.5 * strlen($btn_text)) / 2;
    imagestring($img, $font_size, $x, 9, $btn_text, $text_color);

    header("Content-type: image/png");
    imagepng($img);
    imagedestroy($img);
} else {
    die("GD error");
}