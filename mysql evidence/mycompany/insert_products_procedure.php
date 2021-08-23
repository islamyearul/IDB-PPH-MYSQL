<?php
    $mysqli = new mysqli("localhost", "root", "", "mycompany") or die("Connection Error");  
    if(isset($_POST['submit'])){

        $name = $_POST['p_name'];
        $details = $_POST['p_details'];
        $price = $_POST['p_price'];

        $query =  "CALL add_product('$name', '$details', '$price')";
    
        $mysqli->query($query);
        if($mysqli->query($query)){
            echo " Success";

        }

       
    }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Data Insert By Procedure</title>
    <style>
        body{
            padding: 50px;
            margin: 50px auto;
            border: 5px solid red;
            width:80%;
            font-size: 26px;
        }

    </style>
</head>
<body>
    <h3>Products Data Insert By Procedure</h3>

    <form action="" method="post">

    <input type="text" name="p_name" placeholder="Enter Products Name" id=""> <br><br>
    <textarea name="p_details" id="" cols="30" rows="5" placeholder="Enter Products Details"></textarea><br><br>
    <input type="number" name="p_price" placeholder="Enter Product Price" id="">  <br><br>

    <input type="submit" name="submit"  value="Add Products" id="">
    </form><br><hr><br>


</body>
</html>


