	<form class="selectForm" method="POST" action="index.php?uc=contr&ac=<?php echo $name; ?>">
		<div class="form-group">
			<label for="person-select">Choisissez la personne :</label>
			<select id="person-select" class="form-control" name="person-select">
				<option value="">Choisir une option</option>
				<?php include 'controller/bodyNomPrenom.php'; ?>
			</select>
		</div>

		<button class="btn btn-primary btn-rounded" type="submit">Valider</button>
		<a class="white" href="index.php?uc=contr&ac=seeList"><button class="btn btn-secondary btn-rounded">Retour</button></a>
	</form>