<?php 
	

	function person(){
		$details = ["Islam Yearul", "islamyearul@gmail.com", "Mugda"];
		return $details;
	}

  	$person = person();
  	// // echo $name;
  	// echo"<pre>";
  	// var_dump(person());
 		

 			list($name, $email, $address) = $person;
 			echo "Name: {$name} <br>";
 			echo "Email: {$email} <br>";
 			echo "Address: {$address} <br>";
   
 ?>