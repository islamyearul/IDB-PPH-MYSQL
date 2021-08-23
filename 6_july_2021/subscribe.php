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
 // If the name field is filled in
 if (isset($_POST['submit']))
 {
 $name = $_POST['name'];
 $email = $_POST['email'];
 echo "Your Name is: $name <br>";
 echo "Your Email is: $email     <br>";

 }
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 <p>
 Name:<br>
 <input type="text" id="name" name="name" size="20" maxlength="40">
 </p>
 <p>
 Email Address:<br>
 <input type="text" id="email" name="email" size="20" 
maxlength="40">
 </p>
 <input type="submit" id="submit" name = "submit" value="Go!">
</form>
</body>
</html>