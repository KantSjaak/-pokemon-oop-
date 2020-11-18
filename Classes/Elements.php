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

    /*
    * Sets the main element of the pokemon
    * input string
    */

    public function setElement($element) {
        return $this->element = $element;
    }

    /*
    * Sets the weakness element of the pokemon
    * input string
    */

    public function setWeakness($weakness) {
        return $this->weakness = $weakness;
    }

    /*
    * Sets the element the pokemon resists against
    * input string
    */

    public function setResistance($resistance) {
        return $this->resistance = $resistance;
    }


    /*
     * Gets the main element of the pokemon
     */

    public function getElement() {
        return $this->element;
    }

    /*
     * Gets the weakness element of the pokemon
     */

    public function getWeakness() {
        return $this->weakness;
    }

    /*
     * Gets the element the pokemon resists against
     */

    public function getResistance() {
        return $this->resistance;
    }

}