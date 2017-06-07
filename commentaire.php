<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Commentaire-test</title>
	</head>

<body>
		<h2>Entrez votre pseudo et votre commentaire</h2>
		<p>
			<form action="commentaire_post.php" method="post">
			<label for="pseudo">Votre pseudo</label>
			<input type="text" name="pseudo" id="pseudo" maxlength="20" /><br />

			<label for="commentaire">Votre commentaire</label>
			<input type="text" name="message" id="message" />

			<input type="submit" name="Envoyer" />
			</form>
		</p>

	</body>	
<?php
try
{
	$bdd = new PDO ('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	die('Erreur :' .$e->getMessage());
}

$reponse = $bdd->query('SELECT pseudo, message FROM commentaire ORDER BY id DESC LIMIT 0, 10');

while ($donnees = $reponse->fetch()) 
{
	echo '<strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '<br /><br />';
}

$reponse->closeCursor();
?>

</html>