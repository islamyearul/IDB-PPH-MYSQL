















<?php

  include "interface_class_member.php";
  include "interface_class_topics.php";

 $mem = new Member("Yearul", "Mugda", "www.islam.com");
 echo $mem->getUsername();



// $aMember = new Member( "Farhan", "Dhaka", 'http://w3programmers.com/' );
// echo $aMember->getUsername() . " lives in " . $aMember->getLocation() ."<br>";
// $aMember->save();
// $aTopic = new Topic( "Futonto Golap", $aMember );
// $aTopic->showHeader();
// $aTopic->save();
?>