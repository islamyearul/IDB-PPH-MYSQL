<?php


$file = 'data.txt';

//echo file_get_contents($file);
echo readfile($file);

//echo filesize($file);
$fh =  fopen($file, 'r');
//echo $userdata = fread($fh, filesize($file));

fclose($fh);


?>

