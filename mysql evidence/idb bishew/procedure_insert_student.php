<?php
    $mysqli = new mysqli("localhost", "root", "", "idb_bisew") or die("Connection Error");  
    if(isset($_POST['submit'])){

        $name = $_POST['s_name'];
        $address = $_POST['s_address'];
        $contact = $_POST['s_phone'];

        $query =  "CALL add_student_procedure('$name', '$address', '$contact')";
    
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
    <title>Student Data Insert By Procedure</title>
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
    <h3>Student Data Insert By Procedure</h3>

    <form action="" method="post">

    <input type="text" name="s_name" placeholder="Enter Student Name" id=""> <br><br>
    <textarea name="s_address" id="" cols="30" rows="5" placeholder="Enter Student Address"></textarea><br><br>
    <input type="text" name="s_phone" placeholder="Enter Contact No" id="">  <br><br>

    <input type="submit" name="submit"  value="Add Student" id="">
    </form><br><hr><br>


</body>
</html>


