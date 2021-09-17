<?php

require_once 'Commentaire.php';

class CommentaireManager extends EntityManager
{
    public function initialize($reqSQL){
        $commentaires = [];
        $pdoStat = $this->pdo->query($reqSQL);
        while ($donnees = $pdoStat ->fetch(PDO::FETCH_ASSOC)) {
            $commentaires[] = new Commentaire($donnees);
        }
        return $commentaires;
    }

    public function getCommentaires()
    {
        $reqSQL = 'SELECT * FROM commentaire';
        
        return $this->initialize($reqSQL);

    }
    
    // public function getCommentaireWhereBillet($id){
    //     $reqSQL='SELECT titre, contenu, auteur, commentaire, date_commentaire FROM commentaire INNER JOIN billet ON billet.id = commentaire.id_billet WHERE billet.id = '.$id.'';
        
    //     return $this->initialize($reqSQL);
    // }

    public function getCommentaireWhereBillet($id){
        
        $reqSQL='SELECT titre, contenu, auteur, commentaire.id,id_billet, commentaire, date_commentaire FROM commentaire INNER JOIN billet ON billet.id = commentaire.id_billet WHERE billet.id = '.$id.'';
        
        // echo'<div class = "color">';
        return $this->initialize($reqSQL);
        // echo'</div>';
    }

}