

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Match With SQl</title>
    <style>
        body{
            padding: 50px;
            margin: 100px auto;
            border: 5px solid red;
            width: 40%;
        }
    </style>
</head>
<body>
    <div> <?php //if(isset($returnSMS)){   echo $returnSMS; } ?> </div>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter Your User Name"><br><br>
        <input type="password" name="password" placeholder="Enter User Password"><br><br>
        <input type="submit" name="submit" id="" value="Login">
    </form><br><br>
   
</body>
</html>

<?php
 $mysqli = new mysqli("localhost", "root", "", "mycompany") or die("Connection Error");

  if(isset($_POST['submit'])){
      extract($_POST);

      $password = md5($password);

      $query = "SELECT * FROM user WHERE u_name = '$name' AND u_password = '$password'";
       $Datas = $mysqli->query($query);
     
      $d = mysqli_num_rows($Datas);

      if($d > 0){
          echo "User Match";
      } else {
          echo "User Does Not Match";
      }
   
      
      
      
    

   }






?>