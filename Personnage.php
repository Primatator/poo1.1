<?php
​
abstract class Personnage implements Attaquant, Cible {
​
    protected $nom;
    protected $force;
    protected $niveau;
    protected $pointsSante;
    protected $mort;

    function __construct(string $nom, int $force, int $hp=100, int $niveau=1) {
        $this->nom=$nom;
        $this->force=$force;
        $this->niveau=$niveau;
        $this->pointsSante=$hp;
        $this->mort=false;


    }
    
    /**
     * @return [string] : Description des caractéristiques sous forme de chaîne de caractères
     */
    function caracteristiques() {
        $etat = ($this->mort)? "mort" : "vivant";
        return "Je suis " . $this->nom . ", j'ai une force de " . $this->force . ", un niveau de " . $this->niveau . ", " . $this->pointsSante . " points de santé, et je suis " . $etat ."<br>";
    }
​
​
    /**
     * Attaque un personnage et tente de lui infliger un certain nombre de points de dégats
     * @param Personnage $personnage : Personnage "cible" (objet)
     */
    abstract function attaquer(Cible $personnage);
​
​
    /**
     * Inflige des points de dégat à notre personnage (modifie les points de santé de celui-ci)
     * @param int $degats
     */
     function subirDegat(int $degats){
         $this->pointsSante-= $degats;
         if($this->pointsSante-=0){
             $this->mort=true;
         }


     }

    }
​
    /**
     * SETTER (mutateur) de la propriété $nom : 
     * @param string $nomperso : Nouveau nom à donner à ce personnage
     */
    function setNom(string $nomperso) {
        $this->nom = $nomperso;
    }
​
    /**
     * GETTER (accesseur) de la propriété $nom : 
     * @return [string] : Retourne la valeur de la propriété $nom
     */
    function getNom() {
        return $this->nom;
    }
​
    /**
     * SETTER (mutateur) de la propriété $force : 
     * @param int $for : Nouvelle valeur pour la propriété force de ce personnage
     */
    function setForce(int $for) : bool {
        $this->force = $for;
        return true;
    }
​
    /**
     * GETTER (accesseur) de la propriété $nom : 
     * @return [string] : Retourne la valeur de la propriété $nom
     */
    function getForce() {
        return $this->force;
    }
​
    /**
     * SETTER (mutateur) de la propriété $niveau : 
     * @param int $lvl : Nouvelle valeur pour la propriété niveau de ce personnage
     */
    function setNiveau(int $lvl) {
        $this->niveau = $lvl;
    }
​
    /**
     * SETTER (mutateur) de la propriété $pointsSante : 
     * @param int $pts : Nouvelle valeur pour la propriété pointsSante de ce personnage
     */
    function setPointsSante(int $pts) {
        $this->pointsSante = $pts;
    }
​
    /**
     * SETTER (mutateur) de la propriété $mort : 
     * @param int $mort : Nouvelle valeur pour la propriété mort de ce personnage
     */
    function setMort(bool $mort) {
        $this->mort = $mort;
    }
​
    /**
     * GETTER (accesseur) de la propriété $niveau : 
     * @return [int|null] : Retourne la valeur de la propriété $niveau
     */
    function getNiveau(): ?int {
        return $this->niveau;
    }
​
    /**
     * GETTER (accesseur) de la propriété $pointsSante : 
     * @return [int|null] : Retourne la valeur de la propriété $pointsSante
     */
    function getPointsSante(): ?int {
        return $this->pointsSante;
    }
​
    /**
     * GETTER (accesseur) de la propriété $mort : 
     * @return [int|null] : Retourne la valeur de la propriété $mort
     */
    function isMort(): ?bool {
        return $this->mort;
    }
​
}
?>