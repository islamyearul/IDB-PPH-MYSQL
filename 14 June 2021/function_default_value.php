<?php 
			function salesTax($sales, $tax = 0.20){
				$totalSales = $sales + ($sales * $tax);
				return $totalSales;	
			}

	echo salesTax(100,  0.10);
	echo "<br>"

 ?>

 <?php 
  ini_set('display_errors', 0);

  			function calculate($price, $price2="", $price3=""){
  				echo $price + $price2 + $price3;
  			}


  			calculate(100);

  ?>