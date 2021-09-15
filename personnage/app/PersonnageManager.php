<?php

class PersonnageManager
    {
    private $_bdd; // Instance de PDO.

    // j'affecte la valeur de pdo dans l'attribut $bdd
    public function __construct($pdo) {
    $this->_bdd = $pdo;
    }

    public function insertInto(Personnage $personnage) {
        $reqSQL='INSERT INTO
        personnage(nom, forcePerso, degats, niveau, experience)
        VALUES(:nom, :force, :degats, :niveau, :experience)';
    
        $requete = $this->_bdd->prepare($reqSQL);
        $requete->bindValue(':nom', $personnage ->nom());
        $requete->bindValue(':force', $personnage->forcePerso(), PDO::PARAM_INT);
        $requete->bindValue(':degats', $personnage->degats(), PDO::PARAM_INT);
        $requete->bindValue(':niveau', $personnage->niveau(), PDO::PARAM_INT);
        $requete->bindValue(':experience', $personnage->experience(),PDO::PARAM_INT);
        $requete->execute();
    }
    
    public function getList(){
        $personnages = [];
        $reqSQL='SELECT * FROM personnage';
        $pdoStat = $this->_bdd->query($reqSQL);
        while ($donnees = $pdoStat ->fetch(PDO::FETCH_ASSOC)) {
            $personnages[] = new Personnage($donnees);
        }
        return $personnages;
    }
    
}
    // public function count(){ … }
    // }