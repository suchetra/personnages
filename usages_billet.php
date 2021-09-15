<?php

// On crée une pile d'autoload avec le spl_autoload
spl_autoload_register('charge');
// On crée une fonction pour faire les require de Classe
function charge($classe){
require 'class_billet/' . $classe . '.php';
// require 'class_commentaire/' . $classe . '.php';
}

$db = new PDO('mysql:dbname=testhydra;host=localhost', 'nico', 'nico');

$pM = new BilletManager($db);

var_dump($pM->getList());
$billet = new Billet([
'titre' => 'Nouvelle version de Laravel',
'contenu' => 'Elle est attendu pour Noël !!']);

var_dump($billet);