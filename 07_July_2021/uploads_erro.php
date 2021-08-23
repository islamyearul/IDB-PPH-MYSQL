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
         $errors = array();

         $name = $_FILES['myfile']['name'];
         $size = $_FILES['myfile']['size'];
         $tmp =  $_FILES['myfile']['tmp_name'];
         $er = $_FILES['myfile']['error'];
         $type = $_FILES['myfile']['type'];

         
        if(!$type="jpeg" || !$type="jpg" || !$type="png"){
            $errors[] = "Please Select jped or jpg or png file";
        }
        if($size>50000000){
            $errors[] = "File Size not allow to upload more than 5 kb";
        }


          if( count($errors)>0 ){
              foreach($errors as $error){
                echo $error . "<br>";
              }
             

          } else {
            if( move_uploaded_file($tmp, $path.$name)){
                echo "File Upload Successfully";
            }
          }

       

    

       }
     
           
    ?>
</body>
</html>