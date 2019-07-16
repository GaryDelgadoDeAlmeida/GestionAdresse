	
	<div class="marg">
		<table class="table table-striped">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Préfixe</th>
					<th scope="col">Nom</th>
					<th scope="col">Prénom</th>
					<th scope="col">Adresse 1</th>
					<th scope="col">Adresse 2</th>
					<th scope="col">CP</th>
					<th scope="col">Ville</th>
					<th scope="col">Pays</th>
					<th scope="col">Téléphone</th>
				</tr>
			</thead>

			<tbody>
				<?php include 'controller/bodyAddress.php'; ?>
			</tbody>
		</table>

		<a href="index.php?uc=contr&ac=addData"><button class="btn btn-primary">Ajouter</button></a>
		<a href="index.php?uc=contr&ac=modifData"><button class="btn btn-secondary">Modifier</button></a>
		<a href="index.php?uc=contr&ac=suppData"><button class="btn btn-success">Supprimer</button></a>
		<a href="index.php?uc=contr&ac=csvFile"><button class="btn btn-info">Format CSV</button></a>
	</div>