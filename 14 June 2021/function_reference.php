 <?php 
   		$cost = 20.99;
   		$tax = 0.025;
   		function calculateCost($cost, $tax){
   			$cost = $cost + ($cost*$tax);
   			$tax = $tax + 4;


   		}
 
 calculateCost($cost, $tax);


   printf("Tax is %.2f%% ", $tax*100);
   printf("Cost is Taka %.2f ", $cost);

   ?>