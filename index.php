<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Blog</title>
</head>
    <body>
        <h1>Les billets du blog</h1>

        <?php
        
        // if(str_starts_with(Billet){
            // require 'class_billet/' . $classe . '.php';

        spl_autoload_register('charge');
        // On crée une fonction pour faire les require de Classe
        function charge($classe){
        require $classe . '.php';
        }
        // require 'EntityManager.php';
        // require 'BilletManager.php';
        // require 'CommentaireManager.php';

        $billetManager = new BilletManager();
        // var_dump($billetManager->getBillets());
        
        $commentaireManager = new CommentaireManager();
        // var_dump($commentaireManager->getCommentaires());

        $commentaireManager = new CommentaireManager();
        // var_dump($pM->getList());

        // var_dump($commentaireManager->getCommentaireWhereBillet(3));

        var_dump($commentaireManager->getCommentaireWhereBillet(3));

        ?>
    </body>
</html>