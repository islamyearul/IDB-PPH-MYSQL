<?php 
    $numbers = array(5,7,9,11,15,17,19);

    

   for ($i=0; $i < 1000; $i++) { 
       $randNum = rand(1, 20);

       if (in_array($randNum, $numbers)) {
        echo ("Match with your array : $randNum <br>");
        break;
    }else{
       echo ("Not match with your array : $randNum <br>");
    }
   }
?>