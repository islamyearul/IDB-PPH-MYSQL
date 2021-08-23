<?php

//Covid-19 Vaccination Date;

$vaccine_date = [
    "Dhaka"=> "02 July 2021",
    "Noakhali"=> "01 July 2021",
    "Comilla"=> "11 July 2021",
    "Bogra"=> "21 July 2021",
    "Rajshahi"=> "05 July 2021"


    
];
$cities = array_keys($vaccine_date);
print_r($cities);

 
// if($city){
//     echo "$city is Schedule for Vaccine";
// } else{
//     echo "There is no city are no schedule";
// }
 

?>