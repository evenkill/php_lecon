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
</body>
</html>