<?php
class Commentaire
{
    
    private $_id;
    private $_id_billet;
    private $_auteur;
    private $_commentaire;
    private $_date_commentaire;

    public function id(){ 
        return $this->_id;
    }
    public function id_billet(){ 
        return $this->_id_billet;
    }
    public function auteur(){ 
        return $this->_auteur;
    }
    public function commentaire(){ 
        return $this->_commentaire;
    }
    public function date_commentaire(){ 
        return $this->_date_commentaire;
    }

    public function setId($id){
        // Cas particuliers : on impose la valeur de id à 0
        if ($id < 0 or (int)$id == 0) {
            $id=0;
        }
        // Cas general
        $this->_id = $id;
    }

    public function setId_billet($id_billet){
        // Cas particuliers : on impose la valeur de id à 0
        if ($id_billet < 0 or (int)$id_billet == 0) {
            $id_billet=0;
        }
        // Cas general
        $this->_id_billet = $id_billet;
    }

    public function setAuteur($auteur) {
        // Cas particuliers
        if (!is_string($auteur)) {
            return; // si on n’a pas une chaîne, on arrête le setter
        }
        // Cas general
        $this->_auteur = $auteur;
    }

    public function setCommentaire($commentaire) {
        // Cas particuliers
        // if (is_string($commentaire)) {
            
        //     $this->_commentaire = $commentaire;
        // }
        // Cas general
        $this->_commentaire = $commentaire;
    }

    public function setDate_commentaire($date_commentaire) {
        // Cas particuliers
        if ($date_commentaire < 0 or (int)$date_commentaire == 0) {
            $date_commentaire=0;
        }
        // Cas general
        $this->_date_commentaire = $date_commentaire;
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
    
}