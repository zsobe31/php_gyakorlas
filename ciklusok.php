<!DOCTYPE html>

	<html>
	<head>
		<meta charset="utf-8">
		<title>ciklusok</title>
	</head>
	<body>
	
	<h2>
    <?php

		for ( $i = 0; $i < 10; $i++) {
			if ($i % 2 ) {
				print $i . "<br>";
			}
			// else {
			// print $i . "<br>";
			// }
	    }
	    print "1-10-ig páratlan számok";

	    print "<br>";

	    $szam = 0;
	    while ( $szam < 10 ) {
	    $szam += 1;
	    $fele = $szam / 2;
	    $kerekitve = round( $fele );
	    if ( $fele != $kerekitve ) {
	    	print $szam . "<br>";
		}
	}
	    print "1-10-ig páratlan számok";

	?>
	</h2>
	</body>
	</html>


