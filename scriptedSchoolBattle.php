<?php
require "./Classes/Pokemon.php";
require "./Classes/Charmeleon.php";
require "./Classes/Pickachu.php";
require "./damageCalculator.php";
require "./attack.php";

//this starts it and makes the pokemon
$Pokemon1 = new Pickachu("Pickachu");
$Pokemon2 = new Charmeleon("Charmeleon");

//this is the scripted battle we needed to make for school
DisplayHP($Pokemon2);
echo "<br>". $Pokemon1->getName(). " attacks with ". $Pokemon1->GetAttackName(0);
$Pokemon2->setHealth(damageCalc($Pokemon1, $Pokemon2, 0));
echo "<br>";
DisplayHP($Pokemon2);
echo "<br>";
echo "<br>";
echo "<br>";


DisplayHP($Pokemon1);
echo "<br>". $Pokemon2->getName(). " attacks with ". $Pokemon2->GetAttackName(1);
$Pokemon1->setHealth(damageCalc($Pokemon2, $Pokemon1, 1));
echo "<br>";
DisplayHP($Pokemon1);
echo "<br>";
echo "<br>";
echo "<br>";
//print_r(Pokemon::getPopulation());