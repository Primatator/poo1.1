<?php
​
class Archer extends Personnage {
​
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
​
    /**
     * Attaque un personnage en apellant sa méthode spécifique
     * @param Personnage $personnage : Référence personnage "cible" (objet)
     */
    function attaquer(Cible $personnage) {
        $this->tirer($personnage);
    }
​
    /**
     * Déclenche l'attaque spécifique de ce sous-type de personnage (ici frapper())
     * @param Personnage $perso : Référence personnage "cible" (objet)
     */
    function tirer(Cible $perso) {
 
        echo "Je tire sur " . $perso->getNom() ."<br>";
​
        $degats = $this->force;
        if($perso instanceof Magicien) {
            // echo "Dégats supplémentaires";
            $degats += 4;
        }
​
        $perso->subirDegat($degats);
    }
​
}
?>