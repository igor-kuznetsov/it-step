<?php

interface WorkInterface
{
    public function doWork();
}

interface RestInterface
{
    public function takeRest();
}

interface ManageInterface extends WorkInterface, RestInterface
{
    public function manage();
}

class Manager implements ManageInterface
{
    public function doWork()
    {
        // working
    }

    public function takeRest()
    {
        // resting
    }

    public function manage()
    {
        // managing
    }
}