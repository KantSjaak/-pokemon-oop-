<?php
namespace Classes;

abstract class Pokemon {
    //this one keeps track of alive pokemons
    public static $pokemons = [];

    //makes variables that the pokemons need
    private $_name;
    private $_hitpoints;
    private $_element;
    private $_weakness;
    private $_resistance;
    private $_attacks = array();
    private $_dmgmultiplier;
    private $_wknsmultiplier;

    /*
    * Sets the main element of the pokemon
    * input string
    */
    public function __construct($_name, $_hitpoints, $_element, $_weakness, $_resistance, $primaryatk, $secondaryatk, $_dmgmultiplier, $_wknsmultiplier){
        $this->name = $_name;
        $this->hitpoints = $_hitpoints;
        $this->element = $_element;
        $this->weakness = $_weakness;
        $this->resistance = $_resistance;
        $this->attacks = [$primaryatk, $secondaryatk];
        $this->dmgmultiplier = $_dmgmultiplier;
        $this->wknsmultiplier = $_wknsmultiplier;

        //this one pushes newly created pokemon to the array
        array_push(self::$pokemons, $this);
    }

    //this function will later echo the hp and the name of said pokemon
    abstract public function returnHealth ();

    public static function getPopulation(){
        $alive = [];
        foreach (self::$pokemons as $pokemon) {
            if ($pokemon->hitpoints > 0) {
                array_push($alive, $pokemon);
            }
        }
        return $alive;
    }



    /*
    * calculates the remaining hp of the defending pokemon
    * input var, integer
    */
    public function takeDamage ($defender, $atk){
        if ($this->getElement() === $defender->getWeakness()){
            return $defender->getHealth() - ($this->getAttackDamage($atk) * $defender->getDamageValue());
        }elseif ($this->getElement() === $defender->getResistance()){
            return $defender->getHealth() - ($this->getAttackDamage($atk) - $defender->getWeaknessValue());
        }else{
            return $defender->getHealth() - $this->getAttackDamage($atk);
        }
    }

    /* Setters */

    public function setName($name) {
        return $this->name = $name;
    }

    public function setHealth($hitpoints) {
        return $this->hitpoints = $hitpoints;
    }

    public function v1setElement($element) {
        return $this->setElement($element);
    }

    public function setWeakness($weakness) {
        return $this->setWeakness($weakness);
    }

    public function setResistance($resistance) {
        return $this->setResistance($resistance);
    }

    public function setAttacks($index, $attackName, $attackDamage) {
        $this->attacks[$index]->setAttackName($attackName);
        $this->attacks[$index]->setAttackDamage($attackDamage);
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
        return $this->attacks[$index]->getAttackName();
    }

    public function getAttackDamage($index) {
        return $this->attacks[$index]->getAttackDamage();
    }

    public function getAttacks() {
        return $this->attacks;
    }

    public function getDamageValue() {
        return $this->dmgmultiplier;
    }

    public function getWeaknessValue() {
        return $this->wknsmultiplier;
    }
}