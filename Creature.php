<?php

class Creature implements Attaquant, Cible {

    private $race;
    private $hp;

    function __construct($race, $hp=250){
        $this->race=$race;
        $this->hp=$hp;


    }

    function attaquer(Cible $perso){
        echo "Creature" .$this->race. " attaque!";
    }

    function subirDegats(int $degats) {
        $this->hp -= $degats;


    }
}


















?>