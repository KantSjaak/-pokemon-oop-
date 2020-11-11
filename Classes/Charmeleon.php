<?php

class Charmeleon extends Pokemon
{
    public function __construct($name)
    {
        $hitpoints = 60;
        $element = "Fire";
        $weakness = "Water";
        $resistance = "Lighting";
        $primaryatk = new attack("Head Butt", 10);
        $secondaryatk = new attack("Flare", 30);
        $dmgmultiplier = 2;
        $wknsmultiplier = 10;
        parent::__construct($name, $hitpoints, $element, $weakness, $resistance, $primaryatk, $secondaryatk, $dmgmultiplier, $wknsmultiplier);
    }
}
