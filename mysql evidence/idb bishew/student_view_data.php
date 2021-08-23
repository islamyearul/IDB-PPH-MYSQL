<?php

$mysqli = new mysqli("localhost", "root", "", "idb_bisew") or die("Connection Error");
$query =  "SELECT * FROM student_data_view";
$viewDATA = $mysqli->query($query);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data Describe</title>
    <style>
        body{
            padding: 10px;

        }
        div{
            padding: 10px;
            margin: 10px auto;

        }
      
    </style>
</head>
<body>

<h3>View Data Describe</h3>
<div>
        <table border="1"> 
<thead>
<tr>
  <td>Student Name</td>
  <td>Student Id</td>
  <td>Student Address</td>
  <td>Student Mobile</td>
  <td>Module Name</td>
  <td>Total Marks</td>
</tr>
</thead>
<tbody>
<?php while($view = mysqli_fetch_assoc($viewDATA)){ ?> 

<tr>
  <td><?php echo $view['student_name'] ?></td>
  <td><?php echo $view['student_id'] ?></td>
  <td><?php echo $view['student_address'] ?></td>
  <td><?php echo $view['student_mobile'] ?></td>
  <td><?php echo $view['module_name'] ?></td>
  <td><?php echo $view['total_marks'] ?></td>
</tr>

<?php } ?>
</tbody>
</table>
</div>
</body>
</html>