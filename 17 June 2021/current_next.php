<?php 
$stuInfo = array("current", "next", "prev");

echo "<pre>";

echo current($stuInfo);
echo "<br>";
echo next($stuInfo);
echo "<br>";
echo next($stuInfo);
echo "<br>";
echo prev($stuInfo);
echo "<br>";
echo current($stuInfo);
echo "<br>";
echo reset($stuInfo);
echo "<br>";
 ?>