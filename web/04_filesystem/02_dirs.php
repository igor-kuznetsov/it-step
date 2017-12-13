<?php

echo __DIR__;
echo '<br>';

var_dump(is_dir('test_dir'));
echo '<br>';
var_dump(is_dir('alpha.txt'));

echo '<hr>';
echo getcwd();
echo '<hr>';
chdir('../03_oop');
echo getcwd();

echo '<hr>';

chdir('..');
$h = opendir('04_filesystem');

echo readdir($h) . "<br>";

while ($dir = readdir($h)) {
    echo $dir . "<br>";
}

closedir($h);

echo '<hr>';

chdir('04_filesystem');
if (!file_exists('aaaaa') || !is_dir('aaaaa')) {
    mkdir('aaaaa');
}
rmdir('aaaaa');

echo '<hr>';

chdir('..');
$scan = scandir('04_filesystem', SCANDIR_SORT_NONE);
$filtered_scan = array_diff($scan, ['.', '..']);
$result = array_values($filtered_scan);
var_dump($result);

echo '<hr>';

chdir('04_filesystem');
$res = glob('*.php');
echo "<pre>";
print_r($res);