<?php

require_once 'Billet.php';

class BilletManager extends EntityManager
{
    public function initialize($reqSQL){
        $billets = [];
        $pdoStat = $this->pdo->query($reqSQL);
        while ($donnees = $pdoStat ->fetch(PDO::FETCH_ASSOC)) {
            $billets[] = new Billet($donnees);
        }
        return $billets;
    }
        
    public function getBillets()
    {
        $reqSQL = 'SELECT * FROM billet';
        return $this->initialize($reqSQL);
    }
}

