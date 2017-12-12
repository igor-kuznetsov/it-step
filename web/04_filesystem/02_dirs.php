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

chdir('..');
$h = opendir('04_filesystem');

echo readdir($h) . "<br>";

while ($dir = readdir($h)) {
    echo $dir . "<br>";
}

closedir($h);
die;



//chdir('aaaaa');
//mkdir('aaaaa');

//rmdir('aaaaa/aaaaa');
//rmdir('aaaaa');

chdir('..');
$scan = scandir('dirs', SCANDIR_SORT_NONE);
$result = array_values(array_diff($scan, ['.', '..']));
var_dump($result);
echo '<hr>';

chdir('dirs');
$res = glob('*.txt');
var_dump($res);