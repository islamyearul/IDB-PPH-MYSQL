<?php 
    $flowers = array("Rose", "Belly", "Waterlily", "Sunflower");

    for ($i=0; $i < count($flowers); $i++) { 
       if ($flowers[$i]=="Rose") {continue;}

           echo "Flowr name is :" . $flowers[$i] ."<br>";
       
    }
?>