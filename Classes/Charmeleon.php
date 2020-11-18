<?php
namespace Classes;

class Charmeleon extends Pokemon
{
    public function __construct($name)
    {
        $hitpoints = 60;
        $x = new Elements("Fire", "Water", "Lighting");
        $element = $x->getElement();
        $weakness = $x->getWeakness();
        $resistance = $x->getResistance();
        $primaryatk = new Attack("Head Butt", 10);
        $secondaryatk = new Attack("Flare", 30);
        $dmgmultiplier = 2;
        $wknsmultiplier = 10;
        parent::__construct($name, $hitpoints, $element, $weakness, $resistance, $primaryatk, $secondaryatk, $dmgmultiplier, $wknsmultiplier);
    }

    public function returnHealth()
    {
        echo "Charmeleon heeft " . $this->hitpoints . " hp over.";
    }
}
