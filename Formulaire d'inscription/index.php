<?php

session_start();
include 'view/head.html';

if (isset($_REQUEST['uc'])) {
	$uc = $_REQUEST['uc'];
}
else {
	$uc = 'home';
}

switch ($uc) {
	case 'home':
		include 'view/form_Inscription.html';
		break;

	case 'identification':
		include 'controller/inscription.php';
		break;

	case 'contr':
		include "controller/action.php";
		break;
	
	default:
		echo "This page doesn't exist. <a href='index.php?uc=home'>Retour à la page d'accueil</a>";
		break;
}

include 'view/footer.html';