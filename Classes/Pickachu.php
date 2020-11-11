<?php

class Pickachu extends Pokemon
{
    public function __construct($name)
    {
        $hitpoints = 60;
        $element = element::$ELementelectric;
        $primaryatk = new attack("Electric Punch", 50);
        $secondaryatk = new attack("Pika Punch", 20);
        $dmgmultiplier = 1.5;
        $wknsmultiplier = 20;
        parent::__construct($name, $hitpoints, $element, $primaryatk, $secondaryatk, $dmgmultiplier, $wknsmultiplier);
    }
}