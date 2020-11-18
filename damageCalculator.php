<?php
//move to pokemon class
function damageCalc ($attacker, $defender, $atk){
    if ($attacker->getElement() === $defender->getWeakness()){
        return $defender->getHealth() - ($attacker->getAttackDamage($atk) * $defender->getDamageValue());
    }elseif ($attacker->getElement() === $defender->getResistance()){
        return $defender->getHealth() - ($attacker->getAttackDamage($atk) - $defender->getWeaknessValue());
    }else{
        return $defender->getHealth() - $attacker->getAttackDamage($atk);
    }
}

function DisplayHP ($pkmn){
    echo $pkmn->getName(). " has an hp value of ". $pkmn->getHealth(). "\r\n";
}