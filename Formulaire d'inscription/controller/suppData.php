<?php

$selectedPerson = intval($_POST['person-select']);

if($db->deleteData($selectedPerson)) {
	header("Location: index.php?uc=contr&ac=seeList");
	exit();
}
