<?php 

ini_set("display_errors", "off");
#$fh = fopen("error.txt", "r");

// if(file_exists("error.txt")){
//     $file = fopen("error.txt", "r");
// } else{
//     die ("Error: The file does not exit");
// }
 

try{ 
    $fh = fopen("error.txt", "r");
    if (!$fh) {
        throw new Exception ("File Does not Exist");
      }

} catch(Exception $e){
    echo $e->getMessage();

}





?>