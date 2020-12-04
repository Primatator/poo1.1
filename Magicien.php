<?php

class Magicien extends Personnage {

    /**
     * Permet d'initialiser les paramètres au moment de la création de notre personnage
     * parent:: Fait appel au code de la méthode parente
     * @param string $nom : Son nom
     * @param int $force : Points de force
     * @param int $hp : Points de santé
     * @param int $niveau : Points de niveau
     */
    function __construct(string $nom, int $force, int $hp = 100, int $niveau = 1) {
        parent::__construct($nom, $force, $hp, $niveau);
    }
    
    /**
     * Attaque un personnage et tente de lui infliger un certain nombre de points de dégats
     * @param Personnage $personnage : Personnage "cible" (objet)
     */
    function attaquer(Cible $personnage) {
        //echo $this->nom . " attaque " . $personnage->getNom() . "<br>";
        $this->lancerSort($personnage);
    }

    function lancerSort(Cible $perso) {

        $degats = $this->force;
        if($perso instanceof Guerrier) {
            // echo "Dégats supplémentaires";
            $degats += 8;
        }

        $perso->subirDegat($degats);
    }

}