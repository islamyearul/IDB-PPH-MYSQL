


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
        }
        div{
            font-size: 26px;
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div>
    
<?php
 if(isset($_POST['submit'])){
     $user = $_POST['uname'];
     $uname = strlen($user);
     $umail = $_POST['uemail'];


       if(( $uname<4) || ( $uname>8)){
        echo "User Name Must be 4 to 8 Characters <br>";
       } elseif(! filter_var($umail, FILTER_VALIDATE_EMAIL)){
        echo("Please Enter A valid email address <br>");
        
       } else {
           echo "All Data Are Valid";       }




    //  if (filter_var($umail, FILTER_VALIDATE_EMAIL)) {
    //     echo("Email is a valid email address <br>");
    //   } else {
    //     echo("Email is not a valid email address <br>");
    //   }



    //  if(($uname<4) || ($uname>8)){
    //     echo "User Must be 4 to 8 Characters <br>";
    //  } else {
    //      echo "User are Valid";
    //  }
 }

?>
</div>




<br><br><hr><hr><br><br>


    <form action="" method="post">
        <input type="text" name="uname" placeholder="Enter User Name" value="<?php if(isset($_POST['uname'])){ echo $_POST['uname'];} ?>"><br> <br>
        <input type="text" name="uemail" placeholder="Enter Your Email" value="<?php if(isset($_POST['uemail'])){ echo $_POST['uemail'];} ?>"><br><br>
        <input type="submit" name="submit" value="Check Validation">
    </form>



    
</body>
</html>