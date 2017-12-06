<?php

require_once 'Captain.php';
require_once 'Pilot.php';
require_once 'Engineer.php';
require_once 'SpaceShip.php';

$cap = new Captain('Misha', 47, 'male');
$pilot = new Pilot('Lena', 34, 'female');
$eng1 = new Engineer('Tanya', 29, 'female');
$eng2 = new Engineer('Kolya', 35, 'male');
$eng3 = new Engineer('Vova', 26, 'male');

$spaceship = new SpaceShip('Zorya 9');

$spaceship->addCrewMember($cap);
$spaceship->addCrewMember($pilot);
$spaceship->addCrewMember($eng1);
$spaceship->addCrewMember($eng2);
$spaceship->addCrewMember($eng3);

$spaceship->launch();