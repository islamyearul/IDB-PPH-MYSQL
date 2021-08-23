<?php
 $delimitedText = "Jason+Gilm,ore+Colu-mbus+OH";
 $fields = preg_split("/[+,-]/", $delimitedText);
 foreach($fields as $field) echo $field."<br/>";
?>