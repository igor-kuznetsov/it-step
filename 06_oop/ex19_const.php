<?php

define('TEST_CONST', 10000);

class ClassConstants
{
    const ALPHA = 'a';
    const BETA = 'b';
    const NUMBER = 10;

    public static function outputAlpha()
    {
        echo ClassConstants::ALPHA;
    }

    public function outputBeta()
    {
        echo self::BETA;
    }

    public static function getTestConst()
    {
        echo TEST_CONST;
    }
}

echo ClassConstants::ALPHA;

echo '<hr>';

$obj = new ClassConstants();
echo $obj::BETA;

echo '<hr>';

ClassConstants::outputAlpha();

echo '<hr>';

$obj->outputBeta();

echo '<hr>';

ClassConstants::getTestConst();

//$obj::ALPHA = 10; // Error
//ClassConstants::ALPHA = 20; // Error