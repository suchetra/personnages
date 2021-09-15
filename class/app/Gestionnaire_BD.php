<?php
// version 2

// $pdo = connexionBD('projet_jeu');
// $reqSQL='
// SELECT id, nom, forcePerso, degats, niveau, experience
// FROM personnage
// ';
// $pdoStat = $pdo->query($reqSQL);
// // Chaque entrée sera récupérée et placée dans un array.
// // ::FETCH_ASSOC est une constante
// // fetch pour obtenir chaque ligne de la table sous forme tableau associatif
// while ($donnees = $pdoStat->fetch(PDO::FETCH_ASSOC)){
//     // le constructeur appelle les setters qui font le travail
//     $personnage = new Personnage($donnees);
//     // on peut ensuite faire ce qu’on veut de l’objet :
//     $personnage->afficher();
// }

// version 3

// $pdo = connexionBD('projet_jeu');
// $reqSQL='SELECT id, nom, forcePerso, degats, niveau, experience
// FROM personnage';
// $pdoStat = $pdo->query($reqSQL);
// $pdoStat->setFetchMode(PDO::FETCH_CLASS,'Personnage');
// // Chaque entrée sera récupérée et placée dans un objet
// while ($personnage = $pdoStat->fetch()){
// // on peut ensuite faire ce qu’on veut de l’objet :
// $personnage->afficher();
// }



// grafikart
// https://www.youtube.com/watch?v=weE2adYHPG0&list=PLjwdMgw5TTLVDKy8ikf5Df5fnMqY-ec16&index=13


// globalement on a donc 2 objets : $pdo (la connection à la BDD) et les PDOStatement (qui sont chaque requête qu'on fait au fur et à mesure)




// on fait ça pour éviter de le confondre si on inclut d'autres librairies plus tard
// namespace App;

// 16:16
// use \PDO;

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
        // var_dump('getPDO called');
        // return $pdo;
        return $this->pdo;

    }

    // public function query($statement){
    //     $req = $this->getPDO()->query($statement);
    //     $datas = $req->fetchAll(PDO::FETCH_OBJ);
    //     return $datas;
    // }


}


?>