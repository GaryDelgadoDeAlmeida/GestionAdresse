<?php

$listAddress = $db->getAllAddress();

foreach ($listAddress as $address) { ?>
	<tr>
		<td><?php echo $address['prefixe']; ?></td>
		<td><?php echo $address['nom']; ?></td>
		<td><?php echo $address['prenom']; ?></td>
		<td><?php echo $address['adresse1']; ?></td>
		<td><?php echo $address['adresse2']; ?></td>
		<td><?php echo $address['cp']; ?></td>
		<td><?php echo $address['ville']; ?></td>
		<td><?php echo $address['pays']; ?></td>
		<td><?php echo $address['numTel']; ?></td>
	</tr>
<?php } ?>