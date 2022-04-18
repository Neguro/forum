<?php 

$a = filter_input(INPUT_GET, 'a', FILTER_SANITIZE_STRING);

if(!$c) {
    $c = 'connexion';
} 

switch($a) {
    case 'demandeLogin':
        include 'views/connexion.php'; // n'existe pas encore... (a faire)
        break;
    case 'login':
        $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_STRING);
        $mdp = filter_input(INPUT_POST,'mdp',FILTER_SANITIZE_STRING);
        $user = $pdo->getInfosUser($username,$mdp);
        if(is_array($user)){
            $id = $user['id_u'];
            $nom = $user['nom'];
            $prenom = $user['prenom'];
            $pseudo = $user['username'];
            if ($user['id_r'] == 1)
            {
                $type = 'admin';
            }
            elseif($user['id_r'] == 2)
            {
                $type = 'utilisateur';
            }
            connecter($id, $nom, $prenom, $pseudo, $type);
            header('Location: index.php');
        }
        else
        {
            header('Location: index.php');
        }
        break;
    default:
        include 'views/connexion.php'; // n'existe pas encore... (a faire)
        break;
}