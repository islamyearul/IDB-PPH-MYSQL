<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">

     <input type="file" name="up_image"><br><br>
     <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>

<?php 
  
  if(isset($_POST['submit'])){
      $errors = array();
        $name = $_FILES['up_image']['name'];
        $n = explode(".", $name);
      $img_name = strtolower(end($n));
       $img_type = ['jpg', 'png', 'jpeg'];
      $size = $_FILES['up_image']['size'];
      $tmp = $_FILES['up_image']['tmp_name'];
      $type = $_FILES['up_image']['type'];

      if(in_array($img_name, $img_type)==false){
          $errors[]= "Image Should Be JPG , PNG Or JPEG";
      } 
      if($size > 500000){
          $errors[] = "Image Size Should be under 500 KB";
      }


      if(empty($errors)==true){
          move_uploaded_file($tmp, "upload/".$name);
          echo "Success";
      } else {
          foreach( $errors as $error){
              echo $error;
          }
      }




  }









?>