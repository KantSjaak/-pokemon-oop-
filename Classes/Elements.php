<?php
namespace Classes;

class Elements {
    //makes variables
    private $_element;
    private $_weakness;
    private $_resistance;


    //sets the above variables when someone calls this class
    public function __construct($_element, $_weakness, $_resistance){
        $this->element = $_element;
        $this->weakness = $_weakness;
        $this->resistance = $_resistance;
    }

    /* Setters */

    public function setElement($element) {
        return $this->element = $element;
    }

    public function setWeakness($weakness) {
        return $this->weakness = $weakness;
    }

    public function setResistance($resistance) {
        return $this->resistance = $resistance;
    }

    /* Getters */

    public function getElement() {
        return $this->element;
    }

    public function getWeakness() {
        return $this->weakness;
    }

    public function getResistance() {
        return $this->resistance;
    }

}