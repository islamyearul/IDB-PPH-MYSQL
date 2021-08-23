<?php 
 $islam = array ("islam" => "50", "saiful" => "46", "bablu" => "47", "muazzem" => "48", "shifa" => "45" );
 

 	echo "<table border=1>";
 	echo "<tr><th>Student Name</th><th>Marks</th></tr>";

 		foreach ($islam as $key => $value) {
 			echo "<tr><td>$key</th><td>$value</td></tr>";
 	
 		}

 	echo "</table>";
 ?>