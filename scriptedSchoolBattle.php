<?php
require "./Classes/Pokemon.php";
require "./Classes/Charmeleon.php";
require "./Classes/Pickachu.php";
require "./AttackMoveMaker+DamageMultiplierCalcualtor.php";
require "./element.php";
require "./attack.php";

//this starts it and makes the pokemon

$Pokemon1 = new Pickachu("Pickachu");
$Pokemon2 = new Charmeleon("Charmeleon");

//this is the scripted battle we needed to make for school
DisplayHP($Pokemon2);
echo "<br>". $Pokemon1->name. " attacks with ". $Pokemon1->Attacks[0]->attackname;
$Pokemon2->hitpoints = multipliercalc($Pokemon1, $Pokemon2, 0);
echo "<br>";
DisplayHP($Pokemon2);
echo "<br>";
echo "<br>";
echo "<br>";


DisplayHP($Pokemon1);
echo "<br>". $Pokemon2->name. " attacks with ". $Pokemon2->Attacks[1]->attackname;
$Pokemon1->hitpoints = multipliercalc($Pokemon2, $Pokemon1, 1);
echo "<br>";
DisplayHP($Pokemon1);
echo "<br>";
echo "<br>";
echo "<br>";

//print_r(Pokemon::getPopulation());