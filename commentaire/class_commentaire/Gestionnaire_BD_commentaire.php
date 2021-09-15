<?php

class Gestionnaire_BD{

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;


    public function __construct($db_name, $db_user = 'root', $db_pass = '', $db_host = 'localhost'){
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
    }

    public function getPDO(){
        // on fait un if pour vérifier que $pdo est nul pour eviter que la fonction query se connecte plus d'une fois à la BDD
        if($this->pdo === null){
            $pdo = new PDO('mysql:dbname='. $this->db_name . ';host=localhost', 'nico', 'nico');
            // die(var_dump(PDO::ATTR_ERRMODE));
            // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERREMODE_EXCEPTION);
            $this->pdo = $pdo;
            // var_dump('PDO initialise');
        }
        
        return $this->pdo;

    }

}


?>