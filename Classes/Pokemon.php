<?php

class Pokemon {
    //this one keeps track of alive pokemons
    public static $pokemons = [];

    //makes variables
    private $name;
    private $hitpoints;
    private $Attacks = array();
    private $element;
    private $weakness;
    private $resistance;
    private $dmgmultiplier;
    private $wknsmultiplier;

    //sets the above variables when someone calls this class
    public function __construct($name, $hitpoints, $element, $weakness, $resistance, $primaryatk, $secondaryatk, $dmgmultiplier, $wknsmultiplier){
        $this->name = $name;
        $this->hitpoints = $hitpoints;
        $this->element = $element;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
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

    /* Setters */

    public function setName($name) {
        return $this->name = $name;
    }

    public function setHealth($hitpoints) {
        return $this->hitpoints = $hitpoints;
    }

    public function setElement($element) {
        return $this->element = $element;
    }

    public function setWeakness($weakness) {
        return $this->weakness = $weakness;
    }

    public function setResistance($resistance) {
        return $this->resistance = $resistance;
    }

    public function setAttacks($index, $attackName, $attackDamage) {
        $this->Attacks[$index]->setAttackName($attackName);
        $this->Attacks[$index]->setAttackDamage($attackDamage);
        return;
    }

    public function setDamageValue($dmgmultiplier) {
        return $this->dmgmultiplier = $dmgmultiplier;
    }

    public function setWeaknessValue($wknsmultiplier) {
        return $this->wknsmultiplier = $wknsmultiplier;
    }

    /* Getters */
    
    public function getName() {
        return $this->name;
    }

    public function getHealth() {
        return $this->hitpoints;
    }

    public function getElement() {
        return $this->element;
    }

    public function getWeakness() {
        return $this->weakness;
    }

    public function getResistance() {
        return $this->resistance;
    }

    public function getAttackName($index) {
        return $this->Attacks[$index]->getAttackName();
    }

    public function getAttackDamage($index) {
        return $this->Attacks[$index]->getAttackDamage();
    }

    public function getAttacks() {
        return $this->Attacks;
    }

    public function getDamageValue() {
        return $this->dmgmultiplier;
    }

    public function getWeaknessValue() {
        return $this->wknsmultiplier;
    }
}