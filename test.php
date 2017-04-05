<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mon premier code php (date)</title>
</head>
<body>
<p>Aujourdhui nous les sommmes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
	<?php
	$age_visitor = 17;
	echo 'Le visiteur a ' . $age_visitor .  ' ans';
?>
<div>
	<?php
	if ($age_visitor <= 12) {
		echo "Vous pouvez rentrez Gamin !";
		$autorisation_enter = "Oui";
	}
	else {
	 echo "Tu es trop vieux pour rentrer mon gars...";
	 $autorisation_enter = "NON !";
	}
	echo "Pouvez vous entrer ? La réponse : <br />$autorisation_enter";
	?>
</div>
</body>
</html>