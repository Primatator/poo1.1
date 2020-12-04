<?php

class Creature implements Attaquant, Cible {

    private $race;
    private $hp;

    function __construct($race, $hp = 250) {
        $this->race = $race;
        $this->hp = $hp;
    }

    function caracteristiques() {
        return $this->race . " a " . $this->hp . " points de santé<br>";
    }

    function attaquer(Cible $perso) {
        echo "Creature " . $this->race . " attaque !<br>";
    }

    function subirDegat(int $degats) {
        $this->hp -= $degats;
    }

}