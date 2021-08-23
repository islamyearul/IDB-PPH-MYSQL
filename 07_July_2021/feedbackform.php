
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 
<body>

 <?php
  if(isset($_POST['submit'])){
    $name = $_POST['name'];  
    $email = $_POST['email'];  
    $mess= $_POST['message'];  
    $messag = strip_tags($mess);
    $message = htmlentities($messag, ENT_QUOTES);
  
    if(empty($name)){
        echo die("Please Enter Name <br>");
    } else {
        echo "Your Name: $name <br>";
    }
    
  
    if(empty($email)){
        echo die("Please Enter Email <br>");
        
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      
       echo die("Your Email Invalid <br>");
    } else {
        echo "Your Email: $email <br>";
    }
    
    if(empty($message)){
        echo die("please Wite Something");
    } else {
        echo "Your Message: $message <br>";   
    }


} 

?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
     <input type="text" name="name" placeholder="name"><br>
     <input type="text" name="email" placeholder="email"><br>
     <textarea name="message" id="" cols="30" rows="10" placeholder="message"></textarea><br>
     <input type="submit" value="Send" name="submit">

    
    </form>
</body>
</html>