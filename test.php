<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mon premier code php (date)</title>
</head>
<body>

<div>
	<?php
		$stat = array ('Force = 2','Antelligence = 5','Agilité = 8','PV = 1500','HP = 500');

		for ($numero = 0; $numero < 5; $numero++)
		 {
		 	echo 'stats :' . $stat[$numero] . ' :<br/>';
		 }
	?>
</div>
<div>
	<?php
		$stat = array ('Force = 2','Antelligence = 5','Agilité = 8','PV = 1500','HP = 500');

			echo $stat[2];
	?>
</div>
<br />
<div>
	<! Fonction - Traitement de chaine - date -->
	<?php
		$phrase = 'Une phrase basique en sorte !';
		$longueur = strlen($phrase);

		echo 'La phrase ci-dessous comporte ' . $longueur . ' caractères :</br >' . $phrase ;

		$remplacer_lettre = str_replace('c', 'p', 'coco le jeune coq');

		echo $remplacer_lettre, 
		'<br /> ---> Remplace le <strong>C</strong> par le <strong>P</strong>';

		echo '<br />';

		$minuscule = strtoupper($remplacer_lettre);

		echo $minuscule,
		'<br /> La phrase du dessus est maintenant en majucules !';

		$jour = date('d');
		$mois = date('m');
		$annee = date ('Y');

		echo 'Aujourhui nous sommes le : ' . $jour . '/' . $mois '/' . $annee;
		// Ne fonctionne pas...		
		?>
</div>

</body>
</html>