<?php

class AuthorWithVisibility
{
    public $name;
    private $email;

    public function setEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        }
    }

    public function getEmail()
    {
        $this->echoText();

        return $this->email;
    }

    private function echoText()
    {
        echo 'Text';
    }
}

$author = new AuthorWithVisibility();
$author->name = 'Vasya';
//$author->email = 'vasya@gmail.com'; // Error
$author->setEmail('vasya@gmail.com');
$author->setEmail('itisnotemailaddress.com');

//echo $author->email; // Error
echo $author->getEmail();

$author->echoText(); // Error