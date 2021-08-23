<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
    <style>
        body{
            padding: 50px;
            margin: 100px auto;
            border: 15px solid #07319A;
            width: 40%;
            font-size: 26px;
            
        }
        div{
            font-size: 26px;
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form action="" method="post">
     <input type="text" name="uname" placeholder="Enter Your User Name"><br><br>
     <input type="text" name="email" placeholder="Enter Your Email"><br><br>
     <input type="submit" name="submit" id="" value="Login">  
    </form><br><br>
</body>
</html>

<?php

 if(isset($_POST['submit'])){
     $name = $_POST['uname'];
     $uname = strlen($name);
     $uemail = $_POST['email'];

     if($uname<4 || $uname>8){
         echo "Username Must Be between 4 to 8 characters";
     } elseif(! filter_var($uemail, FILTER_VALIDATE_EMAIL)){
         echo "Please Enter a valid Emial";
     } else {
         echo "All Data Are Valid";
     }
 }









?>