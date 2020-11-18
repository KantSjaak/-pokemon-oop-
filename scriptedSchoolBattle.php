<?php

include "AutoLoader.php";
//this makes the pokemon
$Pokemon1 = new \Classes\Pickachu("Pickachu");
$Pokemon2 = new \Classes\Charmeleon("Charmeleon");

//Pickachu attacks Charmeleon
$Pokemon2->returnHealth();
echo "<br>" . $Pokemon1->getName() . " attacks with " . $Pokemon1->GetAttackName(0);
$Pokemon2->setHealth($Pokemon1->takeDamage($Pokemon2, 0));
echo "<br>";
$Pokemon2->returnHealth();
echo "<br><br>";

//Charmeleon attacks Pickachu
$Pokemon1->returnHealth();
echo "<br>" . $Pokemon2->getName() . " attacks with " . $Pokemon2->GetAttackName(1);
$Pokemon1->setHealth($Pokemon2->takeDamage($Pokemon1, 1));
echo "<br>";
$Pokemon1->returnHealth();
echo "<br><br>";

//print_r(Pokemon::getPopulation());