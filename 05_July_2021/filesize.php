<?php 

$path = 'G:\121226911_191604345866633_1566905682561809046_o.jpg';

$bytes =  filesize($path);

$kbytes = round($bytes/1024, 3)."KB";
echo $Mb = round($kbytes/1024, 3)."MB";
 



?>