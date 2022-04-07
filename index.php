<?php
require_once 'fonctions/pdo.php';
require_once 'fonctions/funct.inc.php';
session_start(); // crée une session pour stocker les infos utiles
$pdo = Pdo::getPdo(); // instancie l'object pour se connecter a la bdd
//estConnecter() // Pour savoir si l'utilisateur est connecter ou pas 

$c = filter_input(INPUT_GET, 'c', FILTER_SANITIZE_STRING);

if (empty($c)) 
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
}

require 'views/footer.php';