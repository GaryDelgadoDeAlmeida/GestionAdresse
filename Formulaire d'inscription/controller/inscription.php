<?php

require 'util/class.pdo.php';

try {
	$bd = new PdoAdresses();
}
catch(PDOException $e) {
	echo $e->getMessage();
}

$login = $_POST['idMail'];
$mdp = $_POST['pass'];

if($bd->getIdentification($login, $mdp)) 
{
	header("Location: index.php?uc=contr&ac=seeList");
	exit();
}