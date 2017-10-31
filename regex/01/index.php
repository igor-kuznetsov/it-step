<?php

$string = 'Random test string with Capital Letterzzz, whitespaces, numbers 0, 1 and 9 and very^special #@! characters';
$matches = [];

// separators
$pattern1 = '/Vasya/'; // 0
$pattern2 = '~test~'; // 1


// pattern modifiers
$pattern3 = '/TeSt/'; // 0
$pattern4 = '/TeSt/i'; // 1


// starts with ...
$pattern5 = '/^Misha/'; // 0
$pattern6 = '/^Random/'; // 1


// ends with ...
$pattern7 = '/symbols$/'; // 0
$pattern8 = '/characters$/'; // 1


// escape sequences
$pattern9 = '/very^special/'; // 0
$pattern10 = '/very\^special/'; // 1


// character class
$pattern11 = '/t[aoi]st/'; // 0
$pattern12 = '/t[ueykl]st/'; // 1


// negates the class (but only if the first character)
$pattern13 = '/t[ao^i]st/'; // 0
$pattern14 = '/t[^aoi]st/'; // 1


// character range
$pattern15 = '/t[3-7]st/'; // 0
$pattern16 = '/t[a-k]st/'; // 1


// repetition (quantifiers)
$pattern17 = '/[a]{2}/'; // /[a][a]/ /aa/
$pattern18 = '/[z]{2,4}/'; // 1


// quantifier ?
$pattern19 = '/[z]{0,1}/';
$pattern20 = '/[z]?/';


// quantifier *
$pattern21 = '/[z]{0,}/';
$pattern22 = '/[z]*/';


// quantifier +
$pattern23 = '/[z]{1,}/';
$pattern24 = '/[z]+/';


// subpatterns
$pattern25 = '/Ran(ger|cor|som)/'; // 0
$pattern26 = '/white(cats|spaces|dogs)/'; // 1


// special characters
$pattern27 = '/t.st/'; // dot (any character)
$pattern28 = '/dom\stest/'; // \s (whitespace)
$pattern29 = '/\d/'; // \d (any digit)
$pattern30 = '/(with|this|that).*white(cats|spaces|dogs)/'; // 1


// ===================================================================

$result = preg_match($pattern30, $string, $matches); // 1, 0, false
//$result = preg_match_all($pattern30, $string, $matches);


var_dump($result);
echo '<hr>';
echo '<pre>';
var_dump($matches);