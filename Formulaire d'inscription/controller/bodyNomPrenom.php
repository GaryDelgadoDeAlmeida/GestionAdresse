<?php

$listNomPrenom = $db->getNomPrenom();

foreach ($listNomPrenom as $NP) { ?>
	<option value="<?php echo $NP['id']; ?>"><?php echo $NP['nom']." ".$NP['prenom']; ?></option>
<?php } ?>