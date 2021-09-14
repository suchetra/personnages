<?php
class Personnage
{

    // $_nombre : variable de classe : static, initialisée à 0
    public static $nbObjects = 0;

    // etc.
    // function static
    public static function nbObjects(){
    // on accede à la variable static par self et ::
    // self represente la classe, on pourrait metre Personnage
    return self::$nbObjects;
    }

//     public function __construct($force, $degats) {
//     // etc.
//     // on compte le nombre d'instances de la classe
    
// }
    public $_vie;

    // private $force;
    // // Déclarations des constantes en rapport avec la force.
    // const FORCE_PETITE = 20;
    // const FORCE_MOYENNE = 50;
    // const FORCE_GRANDE = 80;

    
    public $_force = 9999; // La force du personnage, par défaut 50
    public $_localisation = 9999; // Sa localisation
    public $_experience = 9999; // Son expérience
    public $_degats; // Ses dégâts

    public function __construct($_vie, $_force, $_localisation, $_experience, $_degats){
    $this->_vie = $_vie;


    // le setter vérifie l’intégrité des données fournies
    // On vérifie que $force vaut « FORCE_PETITE »,
    // ou « FORCE_MOYENNE », ou « FORCE_GRANDE ».
    // if (in_array($force, [self::FORCE_PETITE,
    // self::FORCE_MOYENNE, self::FORCE_GRANDE])) {
    // $this->force = $force;
    // }
    // else{ // sinon on donne une petite force par défaut !
    // $this->force = self::FORCE_PETITE;
    
    $this->_force = $_force;
    $this->_localisation = $_localisation;
    $this->_experience = $_experience;
    $this->_degats = $_degats;
    self::$nbObjects++;
    }

    public function parler($something){
    echo $something;
    }

    // Une méthode augmentant l'attribut $experience du personnage.
    public function gagnerExperience($_experience) {
        $this->_experience += $_experience;
    }


    public function afficherExperience() {
        echo $this->_experience;
    }

    public function degats() {
        echo $this->_degats;
    }

    
    // Une méthode qui déplacera le personnage (modifiera sa
    // localisation).
    public function deplacer(){
        $_localisation += 1;
    }

    // Une méthode qui frappera un personnage (suivant la force
    // qu'il a).
    public function frapper($cible){
        // $perso2[$_vie] - $perso1[$_force];
        $cible->_vie -= $this->_force;
    }


    
    

}