<?php

if ($connect) 
{ 
    include 'views/accueil.php';   
}
else 
{
    include 'views/connexion.php';
}