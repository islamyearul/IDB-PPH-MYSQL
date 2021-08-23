<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data" >
    
    <input type="file" name="myfile"><br>
    <input type="submit" name="submit" value="Upload" id="">
       
    </form>

    <?php

     
         if(isset($_POST['submit'])){

         $path = "uploads/";

         $name = $_FILES['myfile']['name'];
         //echo ($_FILES['myfile']['size']) . "<br>";
         $tmp =  $_FILES['myfile']['tmp_name'];
         //echo ($_FILES['myfile']['error']) . "<br>";
        // echo ($_FILES['myfile']['type']) . "<br>";

        if( move_uploaded_file($tmp, $path.$name)){
            echo "File Upload Successfully";
        }

    

       }
     
           
    ?>
</body>
</html>