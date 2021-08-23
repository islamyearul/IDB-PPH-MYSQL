<?php

 $domain = "google.com";
 $recordexists = checkdnsrr($domain, "ANY");
 //if ($recordexists)
 //echo "The domain '$domain' has a DNS record!";
 //else
 //echo "The domain '$domain' does not appear to have a DNS record!";
print_r($recordexists);

?>