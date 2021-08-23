<?php
    $mysqli = new mysqli("localhost", "root", "", "company") or die("Connection Error");  
    if(isset($_POST['submit'])){

        $name = $_POST['m_name'];
        $address = $_POST['m_address'];
        $contact = $_POST['m_contact'];

        $query =  "CALL add_manufacturer_procedure('$name', '$address', '$contact')";
    
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
    <title>Manufacturer Data Insert By Procedure</title>
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
    <h3>Manufacturer Data Insert By Procedure</h3>

    <form action="" method="post">

    <input type="text" name="m_name" placeholder="Enter Manufacturer Name" id=""> <br><br>
    <textarea name="m_address" id="" cols="30" rows="5" placeholder="Enter Manufacturer Address"></textarea><br><br>
    <input type="text" name="m_contact" placeholder="Enter Contact No" id="">  <br><br>

    <input type="submit" name="submit"  value="Add Manufacturer" id="">
    </form><br><hr><br>


</body>
</html>


