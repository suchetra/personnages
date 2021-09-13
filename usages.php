<?php

require ('classes.php');
// création de $perso1
$perso1 = new Personnage(1000, 50, 0, 100, 0);
var_dump($perso1);
Print_r($perso1);
echo "<br />";
echo "<br />";
$perso1->parler('Bonjour, je m\'appelle perso1');
echo "<br />";
echo "<br />";
echo "Gain de 500 xp";
echo "<br />";
$perso1->gagnerExperience(500); // On gagne de l'expérience.
echo 'Expérience de perso1 après gain d\'expérience : ';
$perso1->afficherExperience(); // On affiche la nouvelle valeur
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
// de l'attribut.
// création de $perso2
$perso2 = new Personnage(1000, 50, 0, 200, 50);
Print_r($perso2);
echo "<br />";
echo "<br />";
$perso2->parler('Bonjour, je m\'appelle perso2');
echo "<br />";
// $perso1 frappe $perso2
$perso1->frapper($perso2);
// echo $perso2.$_vie;
// echo 'eee';
// echo 'Dégats de perso_2 après le coup: '. $perso2->degats();
var_dump($perso2);
echo 'Vie de perso2 après le coup: '. $perso2->_vie;
echo "<br />";
echo "<br />";
// var_dump($nbObjects);
echo Personnage::nbObjects().' personnages instanciés';
// echo Personnage::getCompteurCoups().' personnages instanciés';
// echo $perso1->getCompteurCoups();
echo "<br />";
echo "<br />";
echo "<br />";
echo "<br />";
// $perso3 = new Personnage(1000, Personnage::FORCE_MOYENNE, 50, 0, 200, 50);
// var_dump($perso3);