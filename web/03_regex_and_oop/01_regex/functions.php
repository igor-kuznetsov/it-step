<pre><?php

$pattern = '/(foo)(bar)(test)*/';
$subject = 'example foobartest foobar test2';
$matches = [];

$result = preg_match($pattern, $subject, $matches);

var_dump($result);
print_r($matches);

echo '<hr>';

$result = preg_match_all($pattern, $subject, $matches);

var_dump($result);
print_r($matches);

echo '<hr>';

$pattern = '/(foo)(bar)(test)*/';
$input = [
    'foobar',
    'foo',
    'bar',
    'foobartest',
    'foobar 212',
    'test test',
    '412 foobartest',
    'test',
    'test2'
];

$result = preg_grep($pattern, $input);
print_r($result);

echo '<hr>';

$pattern = '~\d+~';
$replacement = '6';
$subject = 'Give me 12 eggs then 12 more.';

$result = preg_replace($pattern, $replacement, $subject);
var_dump($result);