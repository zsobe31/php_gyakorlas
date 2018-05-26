<?php 

	// Személyes adatok

	$nev         = "Szabó Zsolt";
	$eletkor     = 45;
	$foglalkozas = "tűzoltó";
	$lakhely     = "Pécs";

	// Önéletrajz megjelenítése
	$kimenet =  "<p>A nevem: {$nev}. {$eletkor} éves vagyok. Foglakozásom: {$foglalkozas}. A város ahol élek: {$lakhely}.</p>";

	?>

	<!DOCTYPE html>

	<html>
	<head>
		<meta charset="utf-8">
		<title>Önéletrajz</title>
	</head>
	<body>
	
    <?php
      print $kimenet;
    ?>

	</body>
	</html>



