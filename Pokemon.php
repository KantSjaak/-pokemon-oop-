<?php

class Pokemon {
    //this one keeps track of alive pokemons
    /** @var array $pokemons**/
    public static $pokemons = [];

    //makes public variables
    public $name;
    public $hitpoints;
    public $Attacks = array();
    public $Elemental;
    public $dmgmultiplier;
    public $wknsmultiplier;

    //sets the above variables when someone calls this class
    public function __construct($name, $hitpoints, $element, $primaryatk, $secondaryatk, $dmgmultiplier, $wknsmultiplier){
        $this->name = $name;
        $this->hitpoints = $hitpoints;
        $this->Elemental = $element;
        $this->Attacks = [$primaryatk, $secondaryatk];
        $this->dmgmultiplier = $dmgmultiplier;
        $this->wknsmultiplier = $wknsmultiplier;

        //this one pushes newly created pokemon to the array
        array_push(self::$pokemons, $this);
    }

    public static function getPopulation(){
        $alive = [];
        foreach (self::$pokemons as $pokemon) {
            if ($pokemon->hitpoints > 0) {
                array_push($alive, $pokemon);
            }
        }
        return $alive;
    }
}