<?php
require_once 'fonctions/pdo.php';
require_once 'fonctions/funct.inc.php';

session_start(); // crée une session pour stocker les infos utiles
$pdo = PdoForum::getPdoForum();// instancie l'object pour se connecter a la bdd
$connect = estConnecte();

$c = filter_input(INPUT_GET, 'c', FILTER_SANITIZE_STRING);

// Si un utilisateur non identifier essaie d'utiliser les fonctionnalité du forum
if ($c && !$connect) 
{
    $uc = 'connexion';
}
elseif (empty($c)) 
{
    $c = 'accueil';
}

require "views/header.php";

switch ($c) 
{
    case '404':
        include 'controllers/404.php';
        break;
    case 'accueil':
        include 'controllers/c_accueil.php';
        break;
    case 'inscription':
        include 'controllers/c_inscription.php';
        break;
    case 'connexion':
        include 'controllers/c_connexion.php';
        break;  
    case 'deconnexion':
        include 'controllers/c_deconnexion.php';
        break;  
    case 'posts':
        include 'controllers/c_posts.php';
        break;
}

require 'views/footer.php';