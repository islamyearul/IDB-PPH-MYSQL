<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

     <input type="email" name="email", placeholder="Email"><br> <br>
     <input type="password" name="password" placeholder="Password"><br><br>
     <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
 
        $emaill = "islamyearul@gmail.com";
        $passwordd = "123";

        extract($_POST);

        if( $emaill==$email && $passwordd==$password ){

            session_start();
            $_SESSION['emaill'] = $email;
            echo "Email and Password are Matched <br>";
            
            echo "<a href='home.php'>Go to Home</a>";
        }
    }
      
    
    
    ?>
</body>
</html>