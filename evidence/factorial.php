<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
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
    <h2>Factorial Check</h2> <hr><br>

    <form action="" method="post">
        <input type="number" name="input" placeholder="Please Enter A Number" id=""><br><br>
        <input type="submit" name="submit" value="Check Factorial">
    </form> <br><hr><br>


<?php

  if(isset($_POST['submit'])){

    $number = $_POST['input'];


    echo "Factorial of $number Is: "; 
    $fact = 1; 

    for ($i = 1; $i <= $number; $i++){         
        $fact = $fact * $i;  
        }  
        echo $fact . "<br>";  

  }




?>


</body>
</html>