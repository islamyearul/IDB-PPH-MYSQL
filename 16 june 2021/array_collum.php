<?php


$studesnts = [
    ["name"=>"Islam", "Email"=>"gfgislam@gmail.com", "Gender"=> "Male"],
    ["name"=>"Bablu", "Email"=>"gfdislam@gmail.com", "Gender"=> "Male"],
    ["name"=>"Saiful", "Email"=>"dfislam@gmail.com", "Gender"=> "Male"],
    ["name"=>"Shifa", "Email"=>"dfgislam@gmail.com", "Gender"=> "FeMale"]
];

$name = array_column($studesnts, "name");
$email = array_column($studesnts, "Email");
$gender = array_column($studesnts, "Gender");

echo "<pre>";

print_r($name);
echo "<br>";
print_r($email);
echo "<br>";
print_r($gender);
echo "<br>";


?>