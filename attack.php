<?php


class attack {
    //makes public variables
    public $attackname;
    public $damagevalue;


    //sets the above variables when someone calls this class
    public function __construct($attackname, $damagevalue){
        $this->attackname = $attackname;
        $this->damagevalue = $damagevalue;
    }
}