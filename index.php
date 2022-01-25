<?php
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
    default:
        include 'controllers/acceuil.php';
        break;
}

require 'views/footer.php';