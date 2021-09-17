<?php

require_once 'BilletManager.php';
require_once 'Hydrate.php';

class Billet extends Hydrate
{
    
    private $_id;
    private $_titre;
    private $_contenu;

    // public function getId(){ 
    //     return $this->_id;
    // }
    // public function getTitre(){ 
    //     return $this->_titre;
    // }
    // public function getContenu(){ 
    //     return $this->_contenu;
    // }
    
    public function setId($id){
        // Cas particuliers : on impose la valeur de id à 0
        // transtipage int
        // if ($id < 0 or (int)$id == 0) {
        if ((int)$id <= 0) {
            $id=0;
        }
        // Cas general
        $this->_id = $id;
    }

    public function setTitre($titre) {
        $this->_titre = $titre;
    }

    public function setContenu($contenu) {
        $this->_contenu = $contenu;
    }
}