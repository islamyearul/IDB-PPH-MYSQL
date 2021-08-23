<?php 

	echo "<ol>";

  $x = ["Mango", "Banana", "Litchi", "Jerry", "Berry", 'Cerry', "Coconut", "jambura"];
  $y=0;

    for ($y=0; $y < count($x) ; $y++) { 
    	echo "<li>";
 			echo $x[$y];
 			$y++;
 			echo "</li>";
    }

 	echo "</ol>";

 ?>