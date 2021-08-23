<?php 



$file = 'data.txt';
 $fh = fopen($file, 'a');
$name = "\n Atik \n Nazim \n Boby";
fwrite($fh, $name);


$new = file($file);
echo "<pre>";
print_r($new);
      




fclose($file);










?>