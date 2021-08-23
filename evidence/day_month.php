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
    <h2>Day Month Check</h2> <hr><br>

    <form action="" method="post">
        Chose A date <br><br>
        <input type="date" name="date" placeholder="Please Enter A Number" id=""><br><br>
        <input type="submit" name="submit" value="Check Month">
    </form> <br><hr><br>


<?php

  if(isset($_POST['submit'])){

    $dt = $_POST['date'];

          $d = date("d", strtotime($dt)); //Date
	        $l = date("l", strtotime($dt)); //Weekday
	        $y = date("Y", strtotime($dt)); //Year
          $m = date("M", strtotime($dt)); //Month

             echo "$dt = Year:$y, Month:$m, Day:$l, Date:$d";

  }




?>


</body>
</html>