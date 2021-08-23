<?php

$str1 = " Hello World!";
$str1 = rtrim($str1, 'd!');
$str2 = "Hello Dolly";
$str2 = ltrim($str2, 'H');
$str3 = $str1.$str2;
#echo $str . "<br>";
 
echo $str3;