<?php

namespace web\oop;

interface EmailInterface
{
    public function sendEmail();
    public function getEmail();
}

interface CallInterface
{
    public function callPhone();
}

interface SmsInterface
{
    public function sendSms();
}

interface PhoneInterface extends CallInterface, SmsInterface
{
    public function getPhone();
}

class Operator implements EmailInterface, PhoneInterface
{
    public function sendEmail()
    {
        // get email address and send email
    }

    public function getEmail()
    {
        // return email
    }

    public function callPhone()
    {
        // get phone number and call
    }

    public function sendSms()
    {
        // get phone number and send sms
    }

    public function getPhone()
    {
        // return phone number
    }
}

$op = new Operator();
$op->callPhone();