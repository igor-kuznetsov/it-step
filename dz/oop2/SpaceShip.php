<?php

require_once 'CrewInterface.php';

class SpaceShip implements CrewInterface
{
    private $crew = [];
    private $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function addCrewMember($crewMember)
    {
        $this->crew[] = $crewMember;
    }

    public function getCrewList()
    {
        echo '<ul>';

        foreach ($this->crew as $crewMember) {
            echo '<li>'.get_class($crewMember). ' ' . $crewMember->getName() . ' is ready.</li>';
        }

        echo '</ul>';
    }

    public function launch()
    {
        echo '<h2>Spaceship"' . $this->getTitle(). '" is ready.</h2>';
        echo '<p>Boarding is completed:</p>';
        $this->getCrewList();
        echo '<h3>GO!</h3>';
    }
}