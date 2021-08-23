<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User validation</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">User Name</label><br><br>
        <input type="text" name="username" id=""><br><br>
        <label for="pass">User Password</label><br><br>
        <input type="text" name="userpass"><br><br>
        <input type="submit" name="submit" id="" value="Login">
    </form>
</body>
</html>

<?Php
 $mysqli = new mysqli("localhost", "root", "", "fifteeenaug") or die("Connection Error");

        if(isset($_POST['submit'])){
            extract($_POST);
            $query = "SELECT * FROM `users` WHERE username = '$username 'AND u_password = '$userpass' ";
            
          $numRows  = mysqli_num_rows($mysqli->query($query));
           if($numRows > 0){
               echo "<script>alert('User Match')</script>";
           }else{
            echo "<script>alert('User Not Match')</script>";
           }
           
            
        }
 
 







?>