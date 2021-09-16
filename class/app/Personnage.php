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
    
    private $_id;
    private $_nom;
    private $_forcePerso;
    private $_degats;
    private $_niveau;
    private $_experience;

    /* getters compacts ! */
    public function id(){ 
        return $this->_id;
    }
    public function nom(){ 
        return $this->_nom;
    }
    public function force(){ 
        return $this->_forcePerso;
    }
    public function degats(){ 
        return $this->_degats;
    }
    public function niveau(){ 
        return $this->_niveau;
    }
    public function experience(){ 
        return $this->_experience;
    }

    /* setter avec verifications */
    public function setId($id){
        // Cas particuliers : on impose la valeur de id à 0
        if ($id < 0 or (int)$id == 0) {
            $id=0;
        }
        // Cas general
        $this->_id = $id;
    }

    public function setNom($nom) {
        // Cas particuliers
        if (!is_string($nom)) {
            return; // si on n’a pas une chaîne, on arrête le setter
        }
        // Cas general
        $this->_nom = $nom;
    }

    public function setForce($_forcePerso) {
        // Cas particuliers
        if ($_forcePerso < 1 or $_forcePerso > 100 or (int)$_forcePerso == 0 ) {
            return;
        }
        // Cas general
        $this->_forcePerso = $_forcePerso;
    }

    public function setDegats($degats) {
        // Cas particuliers
        if ($degats < 1 or $degats > 100 or (int)$degats == 0 ) {
            return;
        }
        // Cas general
        $this->_degats = $degats;
    }

    public function setNiveau($niveau){
        // Cas particuliers : on impose la valeur de id à 0
        if ($niveau < 0 or (int)$niveau == 0) {
            $niveau=0;
        }
        // Cas general
        $this->_niveau = $niveau;
    }

    public function setExperience($experience){
        // Cas particuliers : on impose la valeur de id à 0
        if ($experience < 0 or (int)$experience == 0) {
            $experience=0;
        }
        // Cas general
        $this->_experience = $experience;
    }

    public function __construct(array $donnees) {
        $this->hydrate($donnees);
    }

    public function hydrate(array $donnees) {
        foreach ($donnees as $key => $value) {
            // On fabrique le nom du setter correspondant à l'attribut :
            $setter = 'set'.ucfirst($key);
            // Si le setter correspondant existe :
            if (method_exists($this, $setter)) {
            // On appelle le setter = $setter contient son nom !!!
                $this->$setter($value);
            }
        }
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

    // public function degats() {
    //     echo $this->_degats;
    // }

    
    // Une méthode qui déplacera le personnage (modifiera sa
    // localisation).
    // public function deplacer(){
    //     $_localisation += 1;
    // }

    // Une méthode qui frappera un personnage (suivant la force
    // qu'il a).
    public function frapper($cible){
        // $perso2[$_vie] - $perso1[$_force];
        $cible->_vie -= $this->_force;
    }

    
    

}