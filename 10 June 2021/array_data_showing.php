<?php 

	// echo "<ol>";

 //  $x = ["Mango", "Banana", "Litchi", "Jerry", "Berry", 'Cerry', "Coconut", "jambura"];
 //  $y=0;
 // 		while ($y < count($x)) {
 // 			echo "<li>";
 // 			echo $x[$y];
 // 			$y++;
 // 			echo "</li>";

 // 		}
 // 	echo "</ol>";

 ?>

 <?php 

   $x = ["Mango", "Banana", "Litchi", "Jerry", "Berry", 'Cerry', "Coconut", "jambura"];
  $y=0;
   ?>
 <ol>
 <?php while ($y < count($x)){ ?>

 <li>   <?php echo $x[$y]; 
 	  $y++; 
 	  ?>   
 </li>

 <?php 
 }
  ?>	

   </ol>