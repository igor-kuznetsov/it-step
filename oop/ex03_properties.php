<?php

class AuthorWithProperties
{
    public $firstName;
    public $lastName;
    public $booksCount = 0;
}

$author = new AuthorWithProperties();

echo $author->booksCount; // 0

echo '<hr>';

$author->firstName = 'Misha';
$author->lastName = 'Volkov';
echo $author->firstName; // Misha