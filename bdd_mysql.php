<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e)
{	// Si tout va bien on peut continuer
        die('Erreur : ' . $e->getMessage());
}
?>



<?php
//On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM jeux_video');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
	<p>
		<strong>Jeux vidéo</strong> : <?php echo $donnees['nom']; ?><br />
		Le possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, et  il le vend à 
		<?php echo $donnees['prix']; ?> euros !<br />
		Ce jeux fonctionne sur <?php echo $donnees['console']; ?> et on y peut  jouer à 
		<?php echo $donnees['nbre_joueurs_max']; ?> au maximum<br />
		<?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur <?php echo $donnees
		['nom']; ?> : <em><?php echo $donnees['commentaires']; ?></em>
	</p>
<?php
}

$reponse->cloreCursor();   // Termine le traitement de la requête 
?>


<?php // Test avec deux entrées valider !
$reponse = $bdd->query('SELECT nom, prix FROM jeux_video');

while ($donnees = $reponse->fetch())

{

	echo 'Voici les prix du jeux ' . $donnees['nom'] .' : ' . $donnees['prix'] . ' euros !<br />';
}

$reponse->closeCursor();
?>
