<DOCTYPE html>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>műveletek</title>
	</head>
	<body>

		<h2>
		<?php
			$a = 7;
			$b = 12;
			$c = 34;

			// és: and, && (alt+1)
			if ( $b > $a and $c > $b ) {
				print "C a legnagyobb!";
			}

			print "<br>";

			// vagy: or, || (alt+í)
			if ( $b > $a || $c > $a ) {
				print "Lehet, hogy A a legkisebb!";
			}

			print "<br>";

			// nem: !
			if ( $b != $a or !($c > $a )) {
				print "Ez már túl bonyolúlt!!!!";
			}

			// Igaz: true
			// hamis: false

			
		?>
		</h2>

	</body>
	</html>