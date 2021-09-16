<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
    <body>
        <h1>Les billets du blog</h1>

        <?php

        // On crée une pile d'autoload avec le spl_autoload
        spl_autoload_register('charge');
        // On crée une fonction pour faire les require de Classe
        function charge($classe){
        
        
        // if()
        // require 'class_billet/' . $classe . '.php';
        require 'class_billet/' . $classe . '.php';
        // require 'class_commentaire/' . $classe . '.php';
        }

        $db = new PDO('mysql:dbname=testhydra;host=localhost', 'nico', 'nico');

        $billetManager = new BilletManager($db);
        $commentaireManager = new CommentaireManager($db);

        var_dump($billetManager->getList());
        // $billet = new Billet([
        // 'titre' => 'Nouvelle version de Laravel',
        // 'contenu' => 'Elle est attendu pour Noël !!']);


        
        var_dump($commentaireManager->getCommentaire(3));

        var_dump($billet);
    ?>
    </body>
</html>