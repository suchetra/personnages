<?php
// On crée une pile d'autoload avec le spl_autoload
spl_autoload_register('requireClass');
// On crée une fonction pour faire les require de Classe
function requireClass($classe){
require $classe . '.php';
}
include 'usages.php'; // On inclut les usages.



// public static $_nbObjects = 0; // attribut de classe
// const FORCE_PETITE = 20; // constante de classe
// public static function nbObjects(){ // méthode de classe
// self::$_nbObjects; // accès à un attribut de classe
// self::FORCE_PETITE // accès à un attribut de classe
// Personnage::FORCE_MOYENNE // accès à un attribut de classe
// public function __toString() // méthode magique
// echo($objet); // <=> echo $objet->__toString()
// ?>