<?php

require_once 'AbstractCrewMember.php';

class Pilot extends AbstractCrewMember
{
    public function work()
    {
        echo 'Pilot is working';
    }
}