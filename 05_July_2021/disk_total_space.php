<?php 

$drive = "d:\PHP\htdocs\PHP";


echo $tsp = "Total Space: ". round(disk_total_space($drive)/1024/1024/1024, 2)."<br>";
echo $freesp = "Free Space: ". round(disk_free_space($drive)/1024/1024/1024, 2)."<br>";
//echo $used = $tsp-$freesp;
//echo "Used Space: ".$used ;








