<?php 

echo "<pre>";
  // print_r($_POST);
print_r($_REQUEST);
echo "<br>";
echo "<br>";
echo $_SERVER['REQUEST_METHOD']; //same output 
echo "<br>";
echo "<br>";

  print_r($_REQUEST); //same output 
  echo "<br>";
  echo "<br>";

  echo "Your First Name Is: " . $_POST['fname']."<br>";
  echo "Your Last Name Is: " . $_POST['lname']."<br>";
  echo "Your Country Is: " . $_POST['country']."<br>";
  echo "Your City Is: " . $_POST['city']."<br>";
  echo "<pre>";

 ?>