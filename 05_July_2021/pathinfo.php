<?php 

$path = '/home/www/data/users.txt';
 
$allinfo = pathinfo($path);
echo '<pre>';
print_r($allinfo);

  // printf("Filename without extension: %s <br/>", basename($path, ".txt"));