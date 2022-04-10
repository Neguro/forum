<?php

$a = filter_input(INPUT_GET, 'a', FILTER_SANITIZE_STRING);

if(!$c) {
    $c = 'inscription';
} 

switch($a) {
    case 'demandeSignin':
        include 'views/inscription.php'; // n'existe pas encore... (a faire)
        break;
    case 'signin':
        $nom = filter_input(INPUT_POST,'nom',FILTER_SANITIZE_STRING);
        $prenom = filter_input(INPUT_POST,'prenom',FILTER_SANITIZE_STRING);
        $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
        $mdp = filter_input(INPUT_POST,'mdp',FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_STRING);
        $user = $pdo->inscription($nom, $prenom, $username, $email, $mdp);
        if($user == null){
            // a crée vue pour erreurs et vue inscription
            // include 'views/erreurs';
            // include 'views/inscription';
        }
        else {
            header('Location: index.php');
        }
        break;
    default:
        include 'views/inscription.php'; // n'existe pas encore... (a faire)
        var_dump($pdo);
        break;
}