

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedure</title>
    <style>
        body{
            padding: 50px;
            margin: 100px auto;
            border: 5px solid red;
            width: 60%;
            font-size: 26px;
        }
        h2{
            
            color: red;
        }
    </style>
</head>
<body>
    <h3>Insert Manufacturer By Using Procedure</h3>
    <form action="" method="post">
        <input type="text" name="mname" id="" placeholder="Enter Manufacturer Name"><br><br>
        <textarea name="madress" id="" cols="30" rows="5" placeholder="Enter Manufacturer Address"></textarea><br><br>
        <input type="number" name="mcontact" id="" placeholder="Enter Manufacturer contact Name"><br><br>
        <input type="submit" name="submit" value="Add Manufacturer" id="">
    </form>
</body>
</html>


<?php
    $mysqli =  new mysqli("localhost", "root", "", "exam_idb") or die("Connection Error");

    if(isset($_POST['submit'])){
        extract($_POST);
        $query = "CALL insert_manufacturer('$mname', '$madress', '$mcontact')";
        $addManu = $mysqli->query($query);
        if($addManu){
            echo "<h2>Manufacturer Add Success</h2>";
        }
    }




?>
