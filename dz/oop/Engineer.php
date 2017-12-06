<?php

require_once 'AbstractCrewMember.php';

class Engineer extends AbstractCrewMember
{
    public function work()
    {
        echo 'Engineer is working';
    }
}