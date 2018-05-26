<!DOCTYPE html>

	<?php

	function honapnev($ho) {
  if ($ho==1) {
		return "január";
	}
  elseif ($ho==2) {
		return "február";
	}
  elseif ($ho==3) {
		return "március";
	}
  elseif ($ho==4) {
		return "április";
	}
  elseif ($ho==5) {
		return "május";
	}
  elseif ($ho==6) {
		return "június";
	}
  elseif ($ho==7) {
		return "július";
	}
  elseif ($ho==8) {
		return "augusztus";
	}
  elseif ($ho==9) {
		return "szeptember";
	}
  elseif ($ho==10) {
		return "október";
	}
  elseif ($ho==11) {
		return "november";
	}
  elseif ($ho==12) {
		return "december";
	}
}

function hetnapja($angolnap) {
  if ($angolnap=="Monday") {
		return "hétfő";
	}
  elseif ($angolnap=="Tuesday") {
		return "kedd";
	}
  elseif ($angolnap=="Wednesday") {
		return "szerda";
	}
  elseif ($angolnap=="Thursday") {
		return "csütörtök";
	}
  elseif ($angolnap=="Friday") {
		return "péntek";
	}
  elseif ($angolnap=="Saturday") {
		return "szombat";
	}
  elseif ($angolnap=="Sunday") {
		return "vasárnap";
	}
}

	?>

	<html>
	<head>
		<meta charset="utf-8">
		<title>dátum-idő-függvények</title>
	</head>
	<body>
	

	<h3>
	    <?php

		$honap = date("n");

		print "Az aktuális hónap neve: " . honapnev($honap) . "<br>";

		$napneve = date("l");

		print "Az aktuális nap neve: " . hetnapja($napneve);

		?>
	</h3>
	</body>
	</html>




