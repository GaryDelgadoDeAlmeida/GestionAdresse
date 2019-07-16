	
	<form class="modifForm" method="POST" action="index.php?uc=contr&ac=modif">
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="idPerson">Identifiant</label><br>
				<input id="idPerson" class="form-control" type="text" name="idPerson" value="<?php echo $person['id']; ?>" readonly>
			</div>

			<div class="form-group col-md-4">
				<label for="name">Nom : *</label><br>
				<input id="name" class="form-control" type="text" name="name" value="<?php echo $person['nom']; ?>" required>
			</div>

			<div class="form-group col-md-4">
				<label for="firstname">Prénom : *</label><br>
				<input id="firstname" class="form-control" type="text" name="firstname" value="<?php echo $person['prenom']; ?>" required>
			</div>
		</div>

		<div class="form-group">
			<label for="address1">Adresse 1 : *</label><br>
			<input id="address1" class="form-control" type="text" name="address1" value="<?php echo $person['adresse1']; ?>" required>
		</div>

		<div class="form-group">
			<label for="address2">Adresse 2 :</label><br>
			<input id="address2" class="form-control" type="text" name="address2" value="<?php echo $person['address2']; ?>">
		</div>

		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="cp">Code Postal : *</label><br>
				<input id="cp" class="form-control" type="text" name="cp" maxlength="5" value="<?php echo $person['cp']; ?>" required>
			</div>

			<div class="form-group col-md-4">
				<label for="city">Ville : *</label><br>
				<input id="city" class="form-control" type="text" name="city" value="<?php echo $person['ville']; ?>" required>
			</div>

			<div class="form-group col-md-4">
				<label for="country">Pays : *</label><br>
				<input id="country" class="form-control" type="text" name="country" value="<?php echo $person['pays']; ?>" required>
			</div>
		</div>

		<div class="form-group">
			<label for="numTel">Numéro de Téléphone : *</label><br>
			<input id="numTel" class="form-control" type="tel" name="numTel" maxlength="10" value="<?php echo $person['numTel']; ?>" required>
		</div>

		<button class="btn btn-primary btn-rounded" type="submit">Valider</button>
		<a class="white" href="index.php?uc=contr&ac=seeList"><button class="btn btn-secondary btn-rounded">Retour</button></a>
	</form>