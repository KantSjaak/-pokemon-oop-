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


    /*
     * Sets the name of the attack
     * input string
     */

    public function setAttackName($name) {
        return $this->attackname = $name;
    }

    /*
     * Sets the damage of the attack
     * input integer
     */


    public function setAttackDamage($damage) {
        return $this->damagevalue = $damage;
    }

    /*
     * Gets the damage of the attack
     */

    public function getAttackName() {
        return $this->attackname;
    }

    /*
     * Gets the damage of the attack
     */

    public function getAttackDamage() {
        return $this->damagevalue;
    }
}