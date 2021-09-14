<?php

class Autoloader {

    static function register(){

        
        // la solution est d'utiliser une autre fonction qui appelle une autre fonction qu'on souhaite appeler pour enregistrer et créer notre autoloader :
        // spl_autoload_register ('mon_autoloader');
        // mais la on veut lui dire d'appeler une fonction qui crée notre autoloader mais qui est dans une classe, grâce à un tableau
        // spl_autoload_register(array('Autoloader', 'autoload'));
        // pour récupérer le nom du fichier
        // __FILE__
        // à l'intérieur d'une classe qu'on a accès à une constante : __CLASS__
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    
    // on ne peut déclarer qu'un seul autoload, quelqu'un ne peut pas apporter son autoload car cette fonction ne peut être déclarer qu'une seule fois
    // donc le :
    // function __autoload($class_name){
    //     require 'class/' . $class_name . '.php';
    // }
    // est à éviter

    static function autoload($class_name){
        require 'class/' . $class_name . '.php';
    }

}