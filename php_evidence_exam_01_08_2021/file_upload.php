

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>File Upload</title>
   <style>
        body{
            padding: 50px;
            margin: 100px auto;
            border: 15px solid #089893;
            width: 40%;
            
        }
        div{
            font-size: 26px;
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
         
<form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" /><br><br>
         <input type="submit" name="submit" value="UPload">
      </form>
</body>
</html>


   <?php
   if(isset($_FILES['image'])){
      $errors= array();

      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];

 
      $arr = explode('.',$_FILES['image']['name']);
      $file_ext = strtolower(end($arr));
      
      $extensions= array("pdf","doc","docx", "jpg", "jepg", "png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a pdf,jpg,jepg,png,doc or docx file.";
      }
      
      if($file_size > 400000){
         $errors[]='File size must be 400 KB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"upload/".$file_name);
         echo "Success";
      }else{
         foreach ($errors as $item) {
            echo "<div> $item <div> ";
            
            
         }
      }
   }
?>
