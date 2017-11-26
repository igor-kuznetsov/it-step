<?php

require_once 'AbstractCrewMember.php';

class Captain extends AbstractCrewMember
{
    public function work()
    {
        echo 'Captain is working';
    }
}