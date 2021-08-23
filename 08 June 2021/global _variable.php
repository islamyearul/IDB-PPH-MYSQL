<?php 
$somevar = 15;
$some = 15;
$var = 15;
function addit(){
	global $somevar;
	$somevar++;
	echo "Somevar is $somevar";
 }
 // addit();
 // echo "<pre>";
 // print_r($GLOBALS);
 ?>
 <?php 

  $somevar2 = 15;
  function addit2(){
  	$GLOBALS["somevar2"]--;

  }
  addit2();
  echo "Somevar2 IS ". $GLOBALS["somevar2"]

  ?>
