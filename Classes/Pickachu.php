<?php

class Pickachu extends Pokemon
{
    public function __construct($name)
    {
        $hitpoints = 60;
        $element = "Lighting";
        $weakness = "Fire";
        $resistance = "Fighting";
        $primaryatk = new attack("Electric Punch", 50);
        $secondaryatk = new attack("Pika Punch", 20);
        $dmgmultiplier = 1.5;
        $wknsmultiplier = 20;
        parent::__construct($name, $hitpoints, $element, $weakness, $resistance, $primaryatk, $secondaryatk, $dmgmultiplier, $wknsmultiplier);
    }
}