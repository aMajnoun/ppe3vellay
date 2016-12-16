<?php

class PdoIntranet
{   		
      	 /*--------------------Version locale---------------------------------------- */
      private static $serveur='mysql:host=localhost';
      private static $bdd='dbname=mrbs';   		
      private static $user='root' ;    		
      private static $mdp='' ;
      private static $monPdo;
      private static $monPdoIntranet = null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct()
  {
    self::$monPdo = new PDO(self::$serveur.';'.self::$bdd, self::$user, self::$mdp); 
    self::$monPdo->query("SET CHARACTER SET utf8");
	}
        
	public function _destruct()
  {
    self::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe
 
 * Appel : $instancePdoIntranet = PdoIntranet::getPdo();
 
 * @return l'unique objet de la classe PdoIntranet
 */
	public  static function getPdo()
  {
		if(self::$monPdoIntranet == null)
    {
			self::$monPdoIntranet = new PdoIntranet();
		}
		return self::$monPdoIntranet;  
	}
/**
 * Retourne les informations du visiteur
 * @param $login 
 * @param $mdp
 * @return le tableau associatif ou NULL
*/
	public function getLeUser($login, $mdp)
  {
    $mdp =md5($mdp);
		$req = "select id, level, name from mrbs_users where name = :login and password = :mdp";
    $stm = self::$monPdo->prepare($req);
    $stm->bindParam(':login', $login);
    $stm->bindParam(':mdp', $mdp);
    $stm->execute();
    $laLigne = $stm->fetch();
    if(count($laLigne)>1)
      return $laLigne;
    else              
      return NULL;
	} 
        
        public function getLaListeSalle()
        {
            $req="select id, room_name from mrbs_room order by id";
            $stm = self::$monPdo->prepare($req);
            $stm->execute();
            $lesLigne = $stm->fetchAll();
            return $lesLignes;
        }
        
}   // fin classe
?>


