<?php

// require 'class/app/Autoloader.php';
// Autoloader::register();


// On crée une pile d'autoload avec le spl_autoload
spl_autoload_register('charge');
// On crée une fonction pour faire les require de Classe
function charge($classe){
require 'class/app/' . $classe . '.php';
}
    // include 'usages.php'; // On inclut les usages.



    // connexion BDD début de vidéo

    // // on utilise pas la fonction exec car elle retourne un int
    // // $count = $pdo->exec('SELECT id, nom, forcePerso, degats, niveau, experience FROM personnage');

    // $db = new Personnage_BD('perso');
    // $pdo = new PDO('mysql:dbname=testhydra;host=localhost', 'nico', 'nico');
    // // die(var_dump(PDO::ATTR_ERRMODE));
    // // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERREMODE_EXCEPTION);

    // // $res pour résultat
    // $res = $pdo->query('SELECT id, nom, forcePerso, degats, niveau, experience FROM personnage');

    // // on voit qu'on a un objet PDOStatement qui contient un paramètre public queryString qui est notre requête sql
    // // var_dump($res);
    // // on affiche les tableaux associatifs et numérique de chaque enregistrement
    // // PDO::FETCH_OBJ 9:00 pour avoir des résultats sous forme d'objet de type stdClass (c'est une classe vide en PHP, comme un objet par défaut qu'on crée en JavaScript)
    // $datas = $res->fetchAll(PDO::FETCH_OBJ);
    // var_dump($datas[0]->id);
    // // var_dump();

    // // var_dump($count);





    // $db = new App\Personnage_BD('perso');
    // // $datas = $db->query('SELECT id, nom, forcePerso, degats, niveau, experience FROM personnage');
    // // var_dump($datas);

    // foreach ($db->query('SELECT * FROM personnage') as $personnage) {
    // }


    // $perso1 = new Personnage(1000, 50, 0, 100, 0);

    // // création de $perso1
    // $perso1 = new Personnage(1000, 50, 0, 100, 0);
    // var_dump($perso1);
    // Print_r($perso1);
    // echo "<br />";
    // echo "<br />";
    // $perso1->parler('Bonjour, je m\'appelle perso1');
    // echo "<br />";
    // echo "<br />";
    // echo "Gain de 500 xp";
    // echo "<br />";
    // $perso1->gagnerExperience(500); // On gagne de l'expérience.
    // echo 'Expérience de perso1 après gain d\'expérience : ';
    // $perso1->afficherExperience(); // On affiche la nouvelle valeur
    // echo "<br />";
    // echo "<br />";
    // echo "<br />";
    // echo "<br />";
    // // de l'attribut.
    // // création de $perso2
    // $perso2 = new Personnage(1000, 50, 0, 200, 50);
    // Print_r($perso2);
    // echo "<br />";
    // echo "<br />";
    // $perso2->parler('Bonjour, je m\'appelle perso2');
    // echo "<br />";
    // // $perso1 frappe $perso2
    // $perso1->frapper($perso2);
    // // echo $perso2.$_vie;
    // // echo 'eee';
    // // echo 'Dégats de perso_2 après le coup: '. $perso2->degats();
    // var_dump($perso2);
    // echo 'Vie de perso2 après le coup: '. $perso2->_vie;
    // echo "<br />";
    // echo "<br />";
    // // var_dump($nbObjects);
    // echo Personnage::nbObjects().' personnages instanciés';
    // // echo Personnage::getCompteurCoups().' personnages instanciés';
    // // echo $perso1->getCompteurCoups();
    // echo "<br />";
    // echo "<br />";
    // echo "<br />";
    // echo "<br />";
    // // $perso3 = new Personnage(1000, Personnage::FORCE_MOYENNE, 50, 0, 200, 50);
    // // var_dump($perso3);


    $perso1 = new Personnage ([
        "nom"=> "ok",
        "force"=> 1
    ]);

    var_dump($perso1);







    // $gb = new Gestionnaire_BD('testhydra');
    // $db = gb->getPDO();

$db = new PDO('mysql:dbname=testhydra;host=localhost', 'nico', 'nico');

    // $pdo = new PDO('mysql:dbname=testhydra;host=localhost', 'nico', 'nico');
    // // die(var_dump(PDO::ATTR_ERRMODE));
    // // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERREMODE_EXCEPTION);

    // // $res pour résultat
    // $res = $pdo->query('SELECT id, nom, forcePerso, degats, niveau, experience FROM personnage');

    // // on voit qu'on a un objet PDOStatement qui contient un paramètre public queryString qui est notre requête sql
    // // var_dump($res);
    // // on affiche les tableaux associatifs et numérique de chaque enregistrement
    // // PDO::FETCH_OBJ 9:00 pour avoir des résultats sous forme d'objet de type stdClass (c'est une classe vide en PHP, comme un objet par défaut qu'on crée en JavaScript)
    // $datas = $res->fetchAll(PDO::FETCH_OBJ);
    // var_dump($datas[0]->id);
    // var_dump();

    // var_dump($count);

    // $bddaze = new PDO('mysql:dbname=testhydra;host=localhost', 'nico', 'nico');

$pM = new PersonnageManager($db);

var_dump($pM->getList());