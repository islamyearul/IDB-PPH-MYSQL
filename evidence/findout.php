<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            padding: 50px;
            margin: 100px auto;
            border: 5px solid red;
            width: 40%;
 
            font-size: 26px;
            color: green;
            font-weight: bold;
        }
    </style>

</head>
<body> 


<?php

$num = array(18,52,38,59,8);
$number = implode(", ",$num);
$res = max($num);
echo "The max Number of{ $number } Is $res";

?>


</body>
</html>