<?php 
 
 $mysqli = new mysqli("localhost", "root", "", "idb_bisew") or die("Connection Error");
 $queryy =  "SELECT * FROM student";

    $menuDATA = $mysqli->query($queryy);
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Data</title>
    <style>
        body{
            padding: 20px;
            margin: 30px auto;
            border: 5px solid red;
            width: 60%;
        }
        /* div{
            font-size: 26px;
            color: white;
            font-weight: bold;
            background-color: purple;
            padding: 10px;
            margin-bottom: 20px;
        } */
    </style>
</head>
<body>
    <h3>Select Student Id to Update Data</h3>

    <form action="" method="post">
        <label for="id">Select Student ID</label><br><br>
        <select name="del_id" id="">
            <option value="" disabled selected>---Select Student ID---</option>
            <?php  while($d =  mysqli_fetch_assoc($menuDATA)){ ?>
            <option value="<?php echo $d['student_id']; ?>"><?php echo $d['student_id']; ?></option>
            <?php } ?>
        </select><br><br>
        <input type="submit" name="show"  value="Select Student ID" id="">
    </form><hr>

<?php
   if(isset($_POST['show'])){
      @ $select_id = $_POST['del_id'];
       $showquery =  "SELECT * FROM student WHERE student_id = $select_id";
       $Students = $mysqli->query($showquery);
      @ $student = mysqli_fetch_assoc($Students);  
   }
?>

<h3>Update Student Data</h3>
     <form action="" method="post">

     <input type="text" name="st_name" value="<?php echo @$student['student_name'] ;?>"><br><br>
     <textarea name="st_address" id="" cols="30" rows="5" ><?php echo @$student['student_address'] ;?></textarea><br><br>
     <input type="number" name="st_mobile" value="<?php echo @$student['student_mobile'] ;?>"><br><br>
     <input type="hidden" name="st_id" value="<?php echo @$student['student_id'] ;?>"><br><br>
     <input type="submit" name="update" value="Add Data">




     </form>
</body>
</html>

<?php
  
   if(isset($_POST['update'])){
       $id = $_POST['st_id'];
       $name = $_POST['st_name'];
       $address = $_POST['st_address'];
       $mobile = $_POST['st_mobile'];

    $upQuery = "UPDATE `student` SET `student_name`='$name',`student_address`='$address',`student_mobile`='$mobile' WHERE student_id = $id";
    if($mysqli->query($upQuery)){
        echo "Data Update Success";
    }
   }
?>