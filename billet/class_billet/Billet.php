<?php
class Billet
{
    
    private $_id;
    private $_titre;
    private $_contenu;

    public function id(){ 
        return $this->_id;
    }
    public function titre(){ 
        return $this->_titre;
    }
    public function contenu(){ 
        return $this->_contenu;
    }
    

    public function setId($id){
        // Cas particuliers : on impose la valeur de id à 0
        if ($id < 0 or (int)$id == 0) {
            $id=0;
        }
        // Cas general
        $this->_id = $id;
    }

    public function setTitre($titre) {
        // Cas particuliers
        // if (!is_string($titre)) {
        //     return; // si on n’a pas une chaîne, on arrête le setter
        // }
        // // Cas general
        $this->_titre = $titre;
    }

    public function setContenu($contenu) {
        // Cas particuliers
        // if (is_string($commentaire)) {
            
        //     $this->_commentaire = $commentaire;
        // }
        // Cas general
        $this->_contenu = $contenu;
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