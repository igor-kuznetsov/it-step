<?php

class AuthorWithProperties
{
    public $firstName;
    public $lastName;
    public $booksCount = 5;
}

$author = new AuthorWithProperties();

echo $author->booksCount; // 5

echo '<hr>';

$author->firstName = 'Misha';
$author->lastName = 'Volkov';
echo $author->firstName; // Misha

$author2 = new AuthorWithProperties();
echo $author2->firstName;