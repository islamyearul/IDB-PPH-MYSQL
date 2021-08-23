<?php

$file = "myfile.txt";
$fh = fopen($file, 'r');
while ( !feof($fh)){
    echo fgets($fh)."<br>";
} 

fclose($fh);

?>