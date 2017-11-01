<?php

interface EmailInterface
{
    public function sendEmail();
}

interface PhoneInterface
{
    public function callPhone();
}

class Operator implements EmailInterface, PhoneInterface
{
    public function sendEmail()
    {
        echo 'email';
    }

    public function callPhone()
    {
        echo 'phone';
    }
}

$op = new Operator();
$op->callPhone();

echo '<hr>';

$interface = new EmailInterface(); // Error