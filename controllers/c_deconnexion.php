<?php
$a = filter_input(INPUT_GET, 'a', FILTER_SANITIZE_STRING);
if (!$c) 
{
    $c = 'deconnexion';
}

switch ($a) 
{
    case 'demandeDeconnexion':
        include 'vues/v_deconnexion.php';
        break;
    case 'logout':
        if ($connect) 
        {
            include 'views/deconnexion.php';
        } 
        else 
        {

        }
        break;
}
