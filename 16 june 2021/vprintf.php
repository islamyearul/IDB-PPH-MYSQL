<?php 
   $customers = array();
   $customers[] = array("Islam", "islam@gmail.com", "56454545");
   $customers[] = array("Saiful", "Saiful@gmail.com", "5655545");
   $customers[] = array("Bablu", "Bablu@gmail.com", "4422545");

   // foreach ($customers as $customer) {
   // 	vprintf("<p>Name: %s<br>Email: %s<br>Phone: %s<p>", $customer);
   	
   // }

    foreach ($customers as $customer) {
    	list($name, $email, $phone) =  $customer;
    	echo "Name: $name <br> Email: $email <br> Phone: $phone <br><br>";

   
   	
   }
  
  
 ?>