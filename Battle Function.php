<?php
require "./Pokemon.php";
require "./AttackMoveMaker+DamageMultiplierCalcualtor.php";
require "./element.php";
require "./attacks.php";


//this starts it and makes the pokemon
$Pokemon1 = new Pokemon("Pickachu", 60, element::$ELementelectric, 20, 1.5, $primaryattack = new attacks("Electric Punch", 50), $secondaryattack = new attacks("Pika Punch", 20),1.5, 20);

$Pokemon2 = new Pokemon("Charmeleon", 60, element::$ELementsolar, 10, 2, $attack1 = new attacks("Head Butt", 10), $attack1 = new attacks("Flare", 30), 2, 10);



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


//print_r(Pokemon::$pokemons);
print_r(Pokemon::getPopulation());