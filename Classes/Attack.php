<?php
namespace Classes;

class Attack {
    //makes variables
    private $_attackname;
    private $_damagevalue;


    //sets the above variables when someone calls this class
    public function __construct($_attackname, $_damagevalue){
        $this->attackname = $_attackname;
        $this->damagevalue = $_damagevalue;
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