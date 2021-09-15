<?php

class CommentaireManager
    {
    private $_bdd; // Instance de PDO.

    // j'affecte la valeur de pdo dans l'attribut $bdd
    public function __construct($pdo) {
    $this->_bdd = $pdo;
    }

    public function insertInto(Commentaire $commentaire) {
        $reqSQL='INSERT INTO
        personnage(id_billet, auteur, commentaire, date_commentaire)
        VALUES(:id_billet, :auteur, :commentaire, :date_commentaire)';
    
        $requete = $this->_bdd->prepare($reqSQL);
        $requete->bindValue(':id_billet', $commentaire ->setId_billet());
        $requete->bindValue(':auteur', $commentaire->setAuteur(), PDO::PARAM_INT);
        $requete->bindValue(':commentaire', $commentaire->setCommentaire(), PDO::PARAM_INT);
        $requete->bindValue(':date_commentaire', $commentaire->setDate_commentaire(), PDO::PARAM_INT);
        $requete->execute();
    }
    
    public function getList(){
        $commentaires = [];
        $reqSQL='SELECT * FROM commentaire';
        $pdoStat = $this->_bdd->query($reqSQL);
        while ($donnees = $pdoStat ->fetch(PDO::FETCH_ASSOC)) {
            $commentaires[] = new Commentaire($donnees);
        }
        return $commentaires;
    }
    
    public function getCommentaire($id){
        $commentaires = [];
        $reqSQL='SELECT titre, contenu, auteur, commentaire, date_commentaire FROM commentaire INNER JOIN billet ON billet.id = commentaire.id_billet WHERE billet.id = '.$id.'';
        // $reqSQL='SELECT auteur, commentaire, date_commentaire FROM commentaire WHERE id_billet = '.$id.'';
        $pdoStat = $this->_bdd->query($reqSQL);
        while ($donnees = $pdoStat ->fetch(PDO::FETCH_ASSOC)) {
            $commentaires[] = new Commentaire($donnees);
        }
        return $commentaires;
    }

}