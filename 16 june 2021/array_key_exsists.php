<?php

//Covid-19 Vaccination Date;

$vaccine_date = [
    "Dhaka"=> "02 July 2021",
    "Noakhali"=> "01 July 2021",
    "Comilla"=> "11 July 2021",
    "Bogra"=> "21 July 2021",
    "Rajshahi"=> "05 July 2021"


    
];

if (array_key_exists("Bogra", $vaccine_date)){
    echo "Yes";
} else{
    echo "No";
}
 

?>