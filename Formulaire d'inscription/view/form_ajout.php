<?php 

$countElement = $db->getAllId();
$j = 1;

for ($i=0; $i < count($countElement); $i++) { 
	if ($j != intval($countElement[$i]['id'])) {
		break;
	}
	else {
		$j++;
	}
}

?>
	<form class="ajoutForm" method="POST" action="index.php?uc=contr&ac=add">
		<div class="form-group">
			<label for="idPerson">Identifiant</label><br>
			<input id="idPerson" class="form-control" type="text" name="idPerson" value="<?php echo $j; ?>" readonly>
		</div>

		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="prefixe">Sexe : *</label>
				<select class="form-control" id="prefixe" name="prefixe">
					<option value="M">M</option>
					<option value="Mme">Mme</option>
				</select>
			</div>

			<div class="form-group col-md-4">
				<label for="name">Nom : *</label><br>
				<input id="name" class="form-control" type="text" name="name" required>
			</div>

			<div class="form-group col-md-4">
				<label for="firstname">Prénom : *</label><br>
				<input id="firstname" class="form-control" type="text" name="firstname" required>
			</div>
		</div>

		<div class="form-group">
			<label for="address1">Adresse 1 : *</label><br>
			<input id="address1" class="form-control" type="text" name="address1" required>
		</div class="form-group">

		<div class="form-group">
			<label for="address2">Adresse 2 :</label><br>
			<input id="address2" class="form-control" type="text" name="address2">
		</div>

		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="cp">Code Postal : *</label><br>
				<input id="cp" class="form-control" type="text" name="cp" maxlength="5" required>
			</div>

			<div class="form-group col-md-4">
				<label for="city">Ville : *</label><br>
				<input id="city" class="form-control" type="text" name="city" required>
			</div>

			<div class="form-group col-md-4">
				<label for="country">Pays : *</label><br>
				<input id="country" class="form-control" type="text" name="country" required>
			</div class="form-group">
		</div>

		<div class="form-group">
			<label for="numTel">Numéro de Téléphone : *</label><br>
			<input id="numTel" class="form-control" type="tel" name="numTel" maxlength="10" required>
		</div>

		<button class="btn btn-primary btn-rounded" type="submit">Ajouter</button>
		<a class="white" href="index.php?uc=contr&ac=seeList"><button class="btn btn-secondary btn-rounded">Retour</button></a>

	</form>