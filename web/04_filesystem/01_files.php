<?php

echo __FILE__;
echo '<br>';

if (is_file('alpha.txt') && is_writable('alpha.txt')) {
    $handle = fopen('alpha.txt', 'r+');

    echo fread($handle, 5) . "<br>";
    echo fread($handle, 5) . "<br>";

    rewind($handle);

    echo fread($handle, 10) . "<br>";

    fseek($handle, 20);

    echo fread($handle, 5) . "<br>";

    fwrite($handle, '#######');
    rewind($handle);

    echo fread($handle, filesize('alpha.txt'));

    fclose($handle);

    $content = file_get_contents('alpha.txt');
    file_put_contents('copy-of-alpha.txt', $content);
    //unlink('copy-of-alpha.txt');
}