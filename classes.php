<?php
class Personnage
{
    public $_vie;
    public $_force = 9999; // La force du personnage, par défaut 50
    public $_localisation = 9999; // Sa localisation
    public $_experience = 9999; // Son expérience
    public $_degats; // Ses dégâts

    public function __construct($_vie, $_force, $_localisation, $_experience, $_degats){
        $this->_vie = $_vie;
        $this->_force = $_force;
        $this->_localisation = $_localisation;
        $this->_experience = $_experience;
        $this->_degats = $_degats;
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