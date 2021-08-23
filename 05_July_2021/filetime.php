<?php

ini_set("date.timezone", "Asia/Dhaka");


$file = "filetime.php";

$atime = fileatime($file);
$mtime = filemtime($file);
$ctime = filectime($file);

echo "Access time: " . date("m-d-y g:i:sa", $atime);
echo "<br>";
echo "Change time: " . date("m-d-y g:i:sa", $ctime);
echo "<br>";

echo "Modification time: ". date("m-d-y g:i:sa", $mtime);

//echo date("m-d-y g:i:sa");

?>
