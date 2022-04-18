<?php

function estConnecte()
{
    return isset($_SESSION['id']);
}

function connecter($id, $nom, $prenom, $pseudo, $type)
{
        $_SESSION['id'] = $id;
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['type'] = $type; 
}

function deconnecter()
{
    session_destroy();
}