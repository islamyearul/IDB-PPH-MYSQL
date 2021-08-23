

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
        body{
            padding: 50px;
            margin: 100px auto;
            border: 5px solid red;
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
      
      $extensions= array("pdf","doc","docx");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a pdf or doc or docx file.";
      }
      
      if($file_size > 500005550){
         $errors[]='File size must be 500 KB';
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


      































<?php
 
//  if(isset($_POST['submit'])){
//     $errors = array();

//      $fname = $_FILES['myfile']['name'];
//      $exp = explode(".", $_FILES['myfile']['name']);
//      $fext = strtolower(end($exp));

//      $ftype = $_FILES['myfile']['type'];
//      $error = $_FILES['myfile']['error'];
//      $ftmp_name = $_FILES['myfile']['tmp_name'];
//      $fsize = $_FILES['myfile']['size'];

//      $type = ['jpg', 'png', 'jpeg'];

//      if(in_array($fext, $type)===false){
//         $errors[] = "File format must be jpg/png/jpeg";
//      } 
     
     
//      if ($fsize > 444444) {
//         $errors[] = "File Size Must be 500 kb";
//      } 
     
     
    
//       if(empty($errors)==true){
//            move_uploaded_file($ftmp_name, 'upload/'.$fname);
//            echo "Success";
//         } else {
//            echo "<ul>";
//             foreach( $errors as $error){
//                echo "<li> $error </li>";
//             }
//            echo "</ul>";
      
//      }


//  }


?>