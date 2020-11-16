<?php

class Pickachu extends Pokemon
{
    public function __construct($name)
    {
        $hitpoints = 60;
        $x = new Elements("Lighting", "Fire", "Fighting");
        $element = $x->getElement();
        $weakness = $x->getWeakness();
        $resistance = $x->getResistance();
        $primaryatk = new Attack("Electric Punch", 50);
        $secondaryatk = new Attack("Pika Punch", 20);
        $dmgmultiplier = 1.5;
        $wknsmultiplier = 20;
        parent::__construct($name, $hitpoints, $element, $weakness, $resistance, $primaryatk, $secondaryatk, $dmgmultiplier, $wknsmultiplier);
    }
}