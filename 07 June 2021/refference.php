
<?php 
  $value1 = "hello";
  $value2 =& $value1 ;
  $value3 =& $value2 ;
  $value4 =& $value3 ;
  $value5 =& $value4 ;

  $value5 = "byeddsf";


  echo $value2;
 ?>