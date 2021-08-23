<?php 
  
$fh = fopen("contact.txt", "w");
try {
 if (! fwrite($fh, "Adding a new contact")) {
 throw new Exception("Could not open the file!");
 }
} catch (Exception $e) {
 echo "Error (File: ".$e->getFile().", line ".
 $e->getLine()."): ".$e->getMessage();
} finally {
 fclose($fh);
}


 ?>