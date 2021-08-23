<?php 
			  		 $cites = [
    		 		"Dhaka"=>array("Male"=>5000, "Female"=>3000), 
    		 		"Rajshahi"=>array("Male"=>4000, "Female"=>3000), 
    		 		"Khulna"=>array("Male"=>7000, "Female"=>5000) 
    		 ];

    		 echo '<pre>';
    		 print_r($cites);

    		 echo $cites["Dhaka"]["Male"];

 ?>