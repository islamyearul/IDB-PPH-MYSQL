<?php
// $a = ['apple', 'orange', 'pineapple', 'pear'];
// header('Content-Type: application/json');
// $b = json_encode($a);
// $c = json_decode($b);
// echo "<pre>";
// print_r($a) ; 
// echo "<br>";
// print_r($b) ; 
// echo "<br>";
// print_r($c) ; 
// echo "<br>";


$OpenWeather = ['api_key' => '048169b54eaab50a29a5ce00a41163c4'];
$zip = "98109";
$base_url = "https://api.openweathermap.org/data/2.5";
$weather_url = "/weather?zip=" . $zip;
$api_key = "&appid={$OpenWeather['api_key']}";
$api_url = $base_url . $weather_url . $api_key;
$weather = json_decode(file_get_contents($api_url));
echo "<pre>";
print_r($weather);

?>