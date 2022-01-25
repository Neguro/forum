<?php
/**
 * Classe Pdo
 */
class Pdo {

    private static $serveur = 'mysql:host=postgresql-neguro.alwaysdata.net';
    private static $bdd = 'dbname=forum';
    private static $user = 'neguro_admin';
    private static $mdp = 'Azerty1622++';
    private static $monPdo = null;

  
    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct() {
      Pdo::$monPdo = new PDO(
        Pdo::$serveur . ';' . Pdo::$bdd,
        Pdo::$user,
        Pdo::$mdp
      );
      Pdo::$monPdo->query('SET CHARACTER SET utf8');
    }
  
    /**
     * Méthode destructeur appelée dès qu'il n'y a plus de référence sur un
     * objet donné, ou dans n'importe quel ordre pendant la séquence d'arrêt.
     */
    public function __destruct() {
      Pdo::$monPdo = null;
    }
  
    /**
     * Fonction statique qui crée l'unique instance de la classe
     * Appel : $instancePdo = Pdo::getPdo();
     *
     * @return l'unique objet de la classe Pdo
     */
    public static function getPdo() {
      if (Pdo::$monPdo == null) {
        Pdo::$monPdo = new Pdo();
      }
      return Pdo::$monPdo;
    }
  
  }