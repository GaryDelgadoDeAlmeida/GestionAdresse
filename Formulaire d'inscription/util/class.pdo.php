<?php

/**
 * 
 */
class PdoAdresses
{
	private static $server = "mysql:host=localhost";
	private static $bdd = "dbname=list_adresse";
	private static $user = "root";
	private static $mdp = "root";
	private static $monPdo;
	private static $monPdoListAdresses = null;
	
	function __construct()
	{
		PdoAdresses::$monPdo = new PDO(PdoAdresses::$server.";".PdoAdresses::$bdd, PdoAdresses::$user, PdoAdresses::$mdp);
		PdoAdresses::$monPdo->query('SET CHARATER SET uft8');
		PdoAdresses::$monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	}

	public function _destruct()
	{
		PdoAdresses::$monPdo = null;
	}

	public static function getPdoAdresses() 
	{
		if (is_null(PdoAdresses::$monPdoListAdresses)) {
			PdoAdresses::$monPdoListAdresses = new PdoAdresses();
		}

		return PdoAdresses::$monPdoListAdresses;
	}

	public function getIdentification($login, $mdp) 
	{
		$sql = "SELECT mail, mdp FROM compte WHERE mail = :mail AND mdp = :mdp";
		$stml = PdoAdresses::$monPdo->prepare($sql);
		$stml->execute([
			":mail"=>$login,
			":mdp"=>$mdp
		]);
		$ligne = $stml->fetch();

		if (!is_null($ligne)) {
			return true;
		}
		return false;
	}

	// cette fonction fonctionne
	public function getEmail($mail)
	{
		$sql = "SELECT mail FROM compte WHERE mail = :mail";
		$stml = PdoAdresses::$monPdo->prepare($sql);
		$stml->execute([
			":mail"=>$mail
		]);
		$ligne = $stml->fetch();
		return $ligne;

	}

	public function getAllAddress()
	{
		$sql = "SELECT id, prefixe, nom, prenom, adresse1, adresse2, cp, ville, pays, numTel FROM adresse ORDER BY nom, prenom";
		$stml = PdoAdresses::$monPdo->prepare($sql);
		$stml->execute();
		$lignes = $stml->fetchAll();
		return $lignes;
	}

	public function getDataByID($id)
	{
		$sql = "SELECT * FROM adresse WHERE id = :id";
		$stml = PdoAdresses::$monPdo->prepare($sql);
		$stml->bindParam(":id", $id);
		$stml->execute();
		$ligne = $stml->fetch();
		return $ligne;
	}

	public function getNomPrenom()
	{
		$sql = "SELECT id, nom, prenom FROM adresse ORDER BY nom, prenom";
		$stml = PdoAdresses::$monPdo->prepare($sql);
		$stml->execute();
		$lignes = $stml->fetchAll();
		return $lignes;
	}

	public function getId($nom, $prenom)
	{
		$sql = "SELECT id FROM adresse WHERE nom = :nom AND prenom = :prenom";
		$stml = PdoAdresses::$monPdo->prepare($sql);
		$stml->bindParam(":nom", $nom);
		$stml->bindParam(":prenom", $prenom);
		$stml->execute();
		return $stml->fetch();
	}

	public function getAllId()
	{
		$sql = "SELECT id FROM adresse";
		$stml = PdoAdresses::$monPdo->prepare($sql);
		$stml->execute();
		return $stml->fetchAll();
	}
	public function insertData($id, $prefixe, $nom, $prenom, $adresse1, $adresse2, $cp, $ville, $pays, $numTel)
	{
		$sql = "INSERT INTO adresse (id, prefixe, nom, prenom, adresse1, adresse2, cp, ville, pays, numTel) VALUES (:id, :prefixe, :nom, :prenom, :adresse1, :adresse2, :cp, :ville, :pays, :numTel)";
		$stml = PdoAdresses::$monPdo->prepare($sql);
		$stml->bindParam(":id", $id);
		$stml->bindParam(":prefixe", $prefixe);
		$stml->bindParam(":nom", $nom);
		$stml->bindParam(":prenom", $prenom);
		$stml->bindParam(":adresse1", $adresse1);
		$stml->bindParam(":adresse2", $adresse2);
		$stml->bindParam(":cp", $cp);
		$stml->bindParam(":ville", $ville);
		$stml->bindParam(":pays", $pays);
		$stml->bindParam(":numTel", $numTel);
		$stml->execute();

		return "L'ajout s'est correctement effectué.";
	}

	public function deleteData($id)
	{
		$sql = "DELETE FROM adresse WHERE id = :id";
		$stml = PdoAdresses::$monPdo->prepare($sql);
		$stml->bindParam(":id", $id);
		$stml->execute();

		return true;
	}

	public function modifData($id, $nom, $prenom, $adresse1, $adresse2, $cp, $ville, $pays, $numTel)
	{
		$sql = "UPDATE adresse SET nom = :nom, prenom = :prenom, adresse1 = :adresse1, adresse2 = :adresse2, cp = :cp, ville = :ville, pays =:pays, numTel = :numTel WHERE id = :id";
		$stml = PdoAdresses::$monPdo->prepare($sql);
		$stml->bindParam(":id", $id);
		$stml->bindParam(":nom", $nom);
		$stml->bindParam(":prenom", $prenom);
		$stml->bindParam(":adresse1", $adresse1);
		$stml->bindParam(":adresse2", $adresse2);
		$stml->bindParam(":cp", $cp);
		$stml->bindParam(":ville", $ville);
		$stml->bindParam(":pays", $pays);
		$stml->bindParam(":numTel", $numTel);
		$stml->execute();
	}
}