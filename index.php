<?php
​require_once "Attaquant.php";
require_once "Personnage.php";
require_once "Guerrier.php";
require_once "Archer.php";
require_once "Magicien.php";
require_once "Creature.php";
require_once "Cible.php";    
​
$perso1 = new Guerrier("Grobill", 15);
$perso2 = new Archer("Legolas", 12, 100, 2);
$perso3 = new Magicien("Gandoulf", 14);

$creature = new Creature("Rat");
​

​
var_dump($perso1);
var_dump($perso2);
var_dump($perso3);
var_dump($creature);
​
echo $perso1->caracteristiques();
echo $perso2->caracteristiques();
echo $perso3->caracteristiques();

$perso1->attaquer($perso3);
$perso2->attaquer($perso3);
$perso3->attaquer($perso1);

echo $perso1->caracteristiques();
echo $perso2->caracteristiques();
echo $perso3->caracteristiques();

$creature->attaquer($perso1);
$perso2->attaquer($creature);

?>