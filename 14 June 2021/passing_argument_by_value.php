<?php 
		 function taxCalculation($price, $taxrate){
		 		$total = $price + $price*$taxrate;
		 		return $total;

	} 
		$abc = taxCalculation(100, 0.05);
		// echo $abc;
 ?>
<!-- Another Type -->
 <?php 
$myprice = 1500;
$govrate = 0.05;
# vecho taxCalculation($myprice, $govrate);

  ?>


 