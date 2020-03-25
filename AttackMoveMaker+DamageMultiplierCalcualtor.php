<?php
function multipliercalc ($attacker, $otherpkmn, $atkid){
    if ($attacker->Elemental["elementname"] === $otherpkmn->Elemental["weakness"]){
        return $otherpkmn->hitpoints - ($attacker->Attacks[$atkid]->damagevalue * $otherpkmn->dmgmultiplier);
    }elseif ($attacker->Elemental["elementname"] === $otherpkmn->Elemental["resistance"]){
        return $otherpkmn->hitpoints - ($attacker->Attacks[$atkid]->damagevalue - $otherpkmn->wknsmultiplier);
    }else{
        return $otherpkmn->hitpoints - $attacker->Attacks[$atkid]->damagevalue;
    }
}

function DisplayHP ($pkmnid){
    echo $pkmnid->name. " has an hp value of ". $pkmnid->hitpoints. "\r\n";
}