<?php

$id = intval($_POST['idPerson']);
$nom = strtoupper($_POST['name']);
$prenom = ucfirst($_POST['firstname']);
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$CP = $_POST['cp'];
$city = $_POST['city'];
$country = $_POST['country'];
$numTel = $_POST['numTel'];

echo $db->modifData($id, $nom, $prenom, $address1, $address2, $CP, $city, $country, $numTel);

header("Location: index.php?uc=contr&ac=seeList");
exit();