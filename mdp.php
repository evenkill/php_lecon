<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Page secrète</title>
	</head>
	
	<body>
		<p>

		<?php
		if (isset($_POST['mdp']) AND $_POST['mdp'] == "kangourou") {
		
		?>
		<h1>Voici la page secrète :</h1>
		<p>Code de sécurité de la NASA : CDJRJ 25645 FF55F </p>


		<?php
		}
		else {
			echo '<p>Mot de passe incorrect</p>';
		}
		?>
	
	</body>
</html>