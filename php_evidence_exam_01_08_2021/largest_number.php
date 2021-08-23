<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest Number</title>
    <style>
        body{
            padding: 50px;
            margin: 100px auto;
            border: 15px solid #1B8B05;
            width: 40%;
            font-size: 26px;
            
        }

    </style>
</head>
<body>
<?php                         

$a = array(1, 44, 5, 6, 68, 9);
$res = 0;

foreach($a as $v) {
    if($res < $v)
        $res = $v;
}

 echo "The Numbers are <br> And The largest number is $res";

?>
</body>
</html>