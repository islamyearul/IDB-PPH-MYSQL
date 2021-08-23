
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        width: 40%;
        height: 400px;
        border: 15px solid red;
        padding: 50px;
        margin: 0 auto;
    }
    /* div{
        padding: 15px;
        border: 1px solid green;
        margin-bottom: 5px;
        width: 300px;
    } */

    </style>
</head>
 
<body>

 <?php
  if(isset($_POST['submit'])){
    $name = $_POST['name'];  
    $email = $_POST['email'];  
    $mess= $_POST['message'];  
    $messag = strip_tags($mess);
    $message = htmlentities($messag, ENT_QUOTES);

    $errors = array();
  
    if(empty($name)){
       $errors[] = "Please Enter Name <br>";
    }

      if(empty($email)){
        $errors[] = "Please Enter Email <br>";    
    } 
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      
       $errors[] = "Your Email Invalid <br>";
    }
    
    if(empty($message)){
        $errors[] = "please Wite Something";
    } 

    if(count($errors)>0){
    echo "<ol>";
     foreach($errors as $error){
         echo "<li><strong> $error </strong></li>";
     }
     echo "</ol>";
    } else {
        echo "<div>Name: $name <br>";
        echo "Email: $email <br>";
        echo "Message: $message <br><div>";
    }


} 

?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
     <input type="text" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>" placeholder="name"><br>
     <input type="text" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" placeholder="email"><br>
     <textarea name="message" id="" cols="30" rows="10" value="<?php if(isset($_POST['message'])){ echo $_POST['message'];}?>"placeholder="message"></textarea><br>
     <input type="submit" value="Send" name="submit">

    
    </form>
</body>
</html>