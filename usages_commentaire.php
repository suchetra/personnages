<?php

// On crée une pile d'autoload avec le spl_autoload
spl_autoload_register('charge');
// On crée une fonction pour faire les require de Classe
function charge($classe){
require 'class_commentaire/' . $classe . '.php';
}

$db = new PDO('mysql:dbname=testhydra;host=localhost', 'nico', 'nico');

$cM = new CommentaireManager($db);

// var_dump($pM->getList());

var_dump($cM->getCommentaire(2));