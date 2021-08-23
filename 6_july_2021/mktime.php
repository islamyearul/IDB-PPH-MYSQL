<?php

 $pre =  mktime(20,35,00,1,22,2000);
 //echo "<br>";
echo "<pre>";
 $now =  time();

 $res =  $now - $pre;
 echo floor($res/(60*60*24*30))." Month";







 //$date = getdate($now);

 //print_r($date);



 





  
?>