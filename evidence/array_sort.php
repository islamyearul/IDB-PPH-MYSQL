<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day Month Check</title>
    <style>
              body{
            padding: 50px;
            margin: 50px auto;
            border: 5px solid red;
            width: 40%;
            font-size: 26px;
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
<h2>Sort the array by Capital City</h2>

<?php



	$country = array("India"=>"Delhi", "Pakistan"=>"Islamabad", "Srilanka"=>"Colombo", "Nepal"=>"Kathmundu", "Bangladesh"=>"Dhaka");

     asort($country);
     foreach ($country as $key => $value) {
	   echo "Country: $key -- Capital: $value<br>";
    }


?>


</body>
</html>