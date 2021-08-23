<?php
 $password = "3312hjj345";

 #echo strspn($password, "1234567890");

 if (strspn($password, "1234567890") == strlen($password));
 echo "The password cannot consist solely of numbers!";



?>