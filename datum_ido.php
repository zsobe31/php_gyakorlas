<!DOCTYPE html>

	<html>
	<head>
		<meta charset="utf-8">
		<title>dátum-idő-függvények</title>
	</head>
	<body>
	

	<h3>
	    <?php

	    // dátum-idő

	    $datum = date("Y-m-d");
	    $ido = date("H:i:s");
	    $datum_ido = date("Y-m-d H:i:s");
	    $feloraja = date("Y-m-d H:i:s", time()-1800);

		print $datum . " " . $ido . "<br>";
		print $datum_ido . "<br>";
		print $feloraja;

		print "<br><br>";

		// függvények

		function proba() {
			print "Helló!";
		}
		proba();

		print "<br><br>";

		function proba2($szoveg, $nev) {
			print $szoveg . ", kedves " . $nev . "!";
		}

		proba2("Jónapot", "Zsolt");

		?>
	</h3>
	</body>
	</html>




