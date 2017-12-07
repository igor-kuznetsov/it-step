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
    public function smallTalk()
    {
        echo 'a';
    }

    public function bigTalk()
    {
        echo 'A';
    }
}

trait ChatB
{
    public function smallTalk()
    {
        echo 'b';
    }

    public function bigTalk()
    {
        echo 'B';
    }
}

class ChatUser
{
    use ChatA, ChatB {
        ChatB::smallTalk insteadof ChatA; // b
        ChatA::bigTalk insteadof ChatB; // A
        ChatB::bigTalk as bigTalkB; // B
    }
}

$obj = new ChatUser();
$obj->smallTalk();
$obj->bigTalk();
$obj->bigTalkB();