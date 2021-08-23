
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <select name="emp_id" id="">
            <option value="1">yearul</option>
            <option value="2">Saiful</option>
            <option value="3">Bablu</option>
            <option value="4">Rupak</option>
        </select>

        <input type="submit" name="submit" value="Check">
    </form>
</body>
</html>

<?php
 
 if(isset($_POST['submit'])){
     require_once("sql_config.php");
      $id = $_POST['emp_id'];
      $sql =  "SELECT calculate_bonus($id)";
      $result = $mysqli->query($sql);
      $row = $result->fetch_array();

      echo $row[0];


 }


?>