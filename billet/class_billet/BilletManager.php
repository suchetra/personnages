<?php

class BilletManager
    {
    private $_bdd; // Instance de PDO.

    // j'affecte la valeur de pdo dans l'attribut $bdd
    public function __construct($pdo) {
    $this->_bdd = $pdo;
    }

    public function insertInto(Billet $billet) {
        $reqSQL='INSERT INTO
        billet(id, titre, contenu)
        VALUES(:id, :titre, :contenu)';
    
        $requete = $this->_bdd->prepare($reqSQL);
        $requete->bindValue(':id', $billet ->setId());
        $requete->bindValue(':titre', $billet->setTitre(), PDO::PARAM_INT);
        $requete->bindValue(':contenu', $billet->setContenu(), PDO::PARAM_INT);
        $requete->execute();
    }
    
    public function getList(){
        $billets = [];
        $reqSQL='SELECT * FROM billet';
        $pdoStat = $this->_bdd->query($reqSQL);
        while ($donnees = $pdoStat ->fetch(PDO::FETCH_ASSOC)) {
            $billets[] = new Billet($donnees);
        }
        return $billets;
    }
    
}