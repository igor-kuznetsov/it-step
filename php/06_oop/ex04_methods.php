<?php

class AuthorWithMethods
{
    public function getBooksList()
    {
        return ['book1', 'book2', 'book3'];
    }

    public function doNothing()
    {
        echo 'doing nothing...';
    }
}

$author = new AuthorWithMethods();

$books = $author->getBooksList();

echo '<pre>';
print_r($books);
echo '</pre>';

echo '<hr>';

$author->doNothing();