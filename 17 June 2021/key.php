<?php

echo "<pre>";

$stuInfo = array("karim"=>40, "Rahim"=>48, "Hasan" =>45, "Jamal" =>47, "Manik" =>35, "Hasan" =>45);
  


# print_r(key($stuInfo));

// while($city = key($stuInfo)){
//     echo $city . "<br>";
//     next($stuInfo);
// }
                
//for output only valu...  
while($city = current($stuInfo)){
    echo $city . "<br>";
    next($stuInfo);
}
  


?>