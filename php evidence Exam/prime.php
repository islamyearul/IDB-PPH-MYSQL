<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime</title>
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
    <h2>Prime Number Check</h2> <hr><br>

    <form action="" method="post">
        <input type="number" name="input" placeholder="Please Enter A Number" id=""><br><br>
        <input type="submit" name="submit" value="Check Prime">
    </form> <br><hr><br>


<?php

  if(isset($_POST['submit'])){

    $number = $_POST['input'];

    function IsPrime($n){
     for($x=2; $x<$n; $x++){
          if($n %$x ==0){
               return 0;
              }
      }
      return 1;
     }
    $a = IsPrime($number);
    if ($a==0){
     ?>
     <h3> <?php echo 'This is not a Prime Number.....'."\n"; ?> </h3>
   <?php
    }else { ?>
    <h3> <?php echo 'This is a Prime Number..'."\n"; ?> </h3>
     
   <?php }

  }


?>


</body>
</html>