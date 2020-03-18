<?php
function multipliercalc ($attacker, $otherpkmn, $atkid){
    if ($attacker->Elemental[0]["elementname"] === $otherpkmn->Elemental[0]["weakness"]){
        return $otherpkmn->hitpoints - ($attacker->Attacks[$atkid]->damagevalue * $otherpkmn->Elemental[2]);
    }elseif ($attacker->Elemental[0]["elementname"] === $otherpkmn->Elemental[0]["resistance"]){
        return $otherpkmn->hitpoints - ($attacker->Attacks[$atkid]->damagevalue - $otherpkmn->wknsmultiplier);
    }else{
        return $otherpkmn->hitpoints - $attacker->Attacks[$atkid]->damagevalue;
    }
}

function DisplayHP ($pkmnid){
    echo $pkmnid->name. " has an hp value of ". $pkmnid->hitpoints. "\r\n";
}