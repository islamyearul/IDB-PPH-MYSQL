<?php

// function fibonacchi($oldest, $old, $new){
//     if($oldest>$new){
//         return;
//     }
//     $start = $start ?? 1;
//     $start++;
//     echo $old . "<br>";

//     $oldest = $old + $new;
//     $old = $new;
//     $new = $oldest;
//     fibonacchi($oldest, $old, $new);

// }

// fibonacchi(0,1,10);



$x = 0;    
$y = 1; 

for($i=0;$i<=10;$i++)    
{    
    $z = $x + $y;    
    echo $z."<br />";         
    $x=$y;       
    $y=$z;     
} 