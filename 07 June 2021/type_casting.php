<?php
	$x = (int) 35.55;
	var_dump($x); //convert to int
// var_dump is show up type and value

	echo "<br> int::::/ ";

		
	$x = (bool) 35.55;
	echo gettype($x); //convert to boolean

	// gettype is show up only type

	echo "<br> bool::::/ ";

		$x = (string) 35.55; //convert to string 
	var_dump($x);

	echo "<br> string::::/ ";
	$y = (array)4945845;
	var_dump($y);
		echo "<br> array::::/ ";

	$v = "1.0";
	if ($v=1) {
		echo "Right";
	}
	echo "<br> if::::/ ";

	$val1= (int)"1.2e3";
	$val2 = 2;
	var_dump($val1);
	echo "<br> int::::/ ";
	echo $val1 * $val2;

	echo "<br> string::::/ ";

	$s  = (string)4545;
	var_dump($s);
		echo "<br> iS_ARRAY::::/ ";
		settype($s, "integer");
		var_dump($s);

	echo "<br> iS_ARRAY::::/ ";
  $season = array("Summer", "Autumn", "Rainy", "Winter", "Spring", ":Late Autumn");
  echo is_array($season);

 ?>