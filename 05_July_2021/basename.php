<?php

$path = '/home/www/data/users.txt';
echo basename($path);
echo "<br>";

   printf("Filename without extension: %s <br/>", basename($path, ".txt"));