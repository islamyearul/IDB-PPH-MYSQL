
<?php 
   $userinfo = "Name: <b>Zeev Suraski</b> <br> Title: <b>PHP Guru</b>";
 preg_match_all("/<b>(.*)<\/b>/U", $userinfo, $res);

 echo "<pre>";

 print_r($res);


 ?>