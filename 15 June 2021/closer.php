<?php 
			$a = 15;	
			$example = function(){
	             global $a;
				$a += 100;
				echo $a . "<br>";	
			   };

	        $example();
         echo $a . "<br>";


  // $example = function() use (&$a){
  // 	$a += 100;
  // 	echo $a . "<br>";
  // };
  // $example();
  // echo$a . "<br>";

 ?>