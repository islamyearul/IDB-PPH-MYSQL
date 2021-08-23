<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Output</title>
</head>
<body>
	<h1>PHP output function: print, echo, printf, sprintf</h1>

	<?php
	//print example
	   print "<p>Today is rainy day </p>";
	   //print example
	   echo "<p>Tomorrow is Tuesday</p>";
	   $season = "Rainy";
	   echo 'Now the <b>$season</b> season is going on<br>';
	   print "We love $season season";
	   $city = "United States of Noakhai";
	   $man = "Islam";
	   echo $city, $man;
	   print "<h1>The man " . $man . " came from " . $city . "</h1>";

	   printf("<h1>The man %s came from %s</h1>", $man, $city);


	   printf("$%.2f", 43.2);

	   $cost = sprintf("$%.2f", 43.5); //sprintf
	  echo "<br>";
	  echo $cost;
	  ?>

</body>
</html>