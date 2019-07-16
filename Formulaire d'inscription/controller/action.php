<?php

require 'util/class.pdo.php';
$db = new PdoAdresses();
$ac = $_REQUEST['ac'];

switch ($ac) {
	case 'seeList':
		include 'view/listAdresses.php';
		break;

	case 'addData':
		include "view/form_ajout.php";
		break;

	case 'modifData':
		$name = "formModifData";
		include "view/form_nomPrenom.php";
		break;

	case 'suppData':
		$name = "supp";
		include "view/form_nomPrenom.php";
		break;

	case 'formModifData':
		$person = $db->getDataByID($_POST['person-select']);
		include 'view/form_modif.php';
		break;

	case 'add':
		include 'controller/addData.php';
		break;

	case 'modif':
		include 'controller/modifData.php';
		break;

	case 'supp':
		include 'controller/suppData.php';
		break;

	case 'csvFile':
		include 'controller/csvFile.php';
		break;
	
	default:
		echo "This page doesn't exist. <a href='index.php?uc=home'>Retour accueil</a>";
		break;
}