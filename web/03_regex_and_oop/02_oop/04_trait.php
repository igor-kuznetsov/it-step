<?php

namespace web\oop;

trait Hello
{
    public function printHello()
    {
        echo 'Hello ';
    }
}

trait World
{
    public function printWorld()
    {
        echo 'World';
    }
}

trait Punctuation
{
    public function printExclamation()
    {
        echo '!';
    }
}

trait HelloWorld
{
    use Hello, World;
}

class MyHelloWorld
{
    use HelloWorld, Punctuation;

    public function printHello()
    {
        echo 'HELLO';
    }
}

$obj = new MyHelloWorld();
$obj->printHello();
$obj->printWorld();
$obj->printExclamation();
echo '<hr>';

class Child extends MyHelloWorld
{
    public function printHello()
    {
        echo 'hello';
    }
}

$child = new Child();
$child->printHello();
$child->printWorld();
$child->printExclamation();

trait ChatA
{
    public function shortMessage()
    {
        echo 'a';
    }

    public function longMessage()
    {
        echo 'A';
    }
}

trait ChatB
{
    public function shortMessage()
    {
        echo 'b';
    }

    public function longMessage()
    {
        echo 'B';
    }
}

class ChatUser
{
    use ChatA, ChatB {
        ChatB::shortMessage insteadof ChatA;
        ChatA::longMessage insteadof ChatB;
        ChatB::longMessage as longMessageB;
    }
}

$obj = new ChatUser();
$obj->shortMessage(); // b
$obj->longMessage(); // A
$obj->longMessageB(); // B