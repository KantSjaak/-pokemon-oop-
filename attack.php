<?php


class attack {
    //makes variables
    private $attackname;
    private $damagevalue;


    //sets the above variables when someone calls this class
    public function __construct($attackname, $damagevalue){
        $this->attackname = $attackname;
        $this->damagevalue = $damagevalue;
    }

    /* Setters */

    public function setAttackName($name) {
        return $this->attackname = $name;
    }

    public function setAttackDamage($damage) {
        return $this->damagevalue = $damage;
    }

    /* Getters */

    public function getAttackName() {
        return $this->attackname;
    }

    public function getAttackDamage() {
        return $this->damagevalue;
    }
}