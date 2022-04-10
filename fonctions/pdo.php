<?php
/**
 * Classe Pdo
 */
class PdoForum {

    private static $serveur = 'mysql:host=eu-cdbr-west-02.cleardb.net';
    private static $bdd = 'dbname=heroku_46cc08b23a74aff';
    private static $user = 'b28adad638185e';
    private static $mdp = '8fd030cf';
    private static $monPdo;
    private static $monPdoForum = null;

  
    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct() {
      PdoForum::$monPdo = new PDO(
        PdoForum::$serveur . ';' . PdoForum::$bdd,
        PdoForum::$user,
        PdoForum::$mdp
      );
      PdoForum::$monPdo->query('SET CHARACTER SET utf8');
    }
  
    /**
     * Méthode destructeur appelée dès qu'il n'y a plus de référence sur un
     * objet donné, ou dans n'importe quel ordre pendant la séquence d'arrêt.
     */
    public function __destruct() {
      PdoForum::$monPdo = null;
    }
  
    /**
     * Fonction statique qui crée l'unique instance de la classe
     * Appel : $instancePdo = Pdo::getPdo();
     *
     * @return l'unique objet de la classe Pdo
     */
    public static function getPdoForum() {
      if (PdoForum::$monPdoForum == null) {
        PdoForum::$monPdoForum = new PdoForum();
      }
      return PdoForum::$monPdoForum;
    }

    /**
     * Fonction statique qui permet l'inscription d'un utilisateur dans la base de données.
     */
    public static function inscription(string $nom, string $prenom, string $username, string $email, string $mdp) {
      $mdpHash = md5($mdp);
      $requete = PdoForum::$monPdo->prepare("insert into User (nom,prenom,username,email,mdp,id_r) values (:unNom,:unPrenom,:unUsername,:unEmail,:unMdp,2)");
        $requete->bindParam(':unNom',$nom,PDO::PARAM_STR);
        $requete->bindParam(':unPrenom',$prenom,PDO::PARAM_STR);
        $requete->bindParam(':unUsername',$username,PDO::PARAM_STR);
        $requete->bindParam(':unEmail',$email,PDO::PARAM_STR);
        $requete->bindParam(':unMdp',$mdpHash,PDO::PARAM_STR);
        $requete->execute();
    }
  
  }