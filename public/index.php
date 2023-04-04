<?php

/***************************************/
/******** ⚠️ WORK HERE ONLY ⚠️ ***********/

require __DIR__ . '/../src/Animal.php';
require __DIR__ . '/../src/Area.php';
use App\Area;
use App\Animal;


$lion = new Animal('lion', 4);
$lion->setCarnivorous(true);
$lion->setSize(70);
$lion->setThreatenedLevel('VU');

$parrot = new Animal('parrot', 2);
$parrot->setSize(30);

$elephant = new Animal('elephant', 4);
$elephant->setThreatenedLevel('LC');

$savana = new Area('savana');
$savana->addAnimal($lion);
$savana->addAnimal($elephant);

$jungle = new Area('jungle');
$savana->addAnimal($parrot);

$aquarium = new Area('aquarium');

$areas = [$savana, $jungle, $aquarium];
$animals = [$lion, $parrot, $elephant];

/***************************************/
/***************************************/


// Do not modify code below
require 'view.php';
?>