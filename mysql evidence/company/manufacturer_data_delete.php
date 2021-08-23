<?php
    $mysqli = new mysqli("localhost", "root", "", "company") or die("Connection Error");
    $query =  "SELECT * FROM manufacturer";
    $menuDATA = $mysqli->query($query);
   
    if(isset($_POST['submit'])){
        $input =  $_POST['del_id'];
           $queryy =  "DELETE FROM manufacturer WHERE manufacturer_id = $input";
           $delDATA = $mysqli->query($queryy);
           $delSMS = "";
           if($delDATA){
           $delSMS = "Menufacturer Data Delete Success";
       }
    }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer Data Delete By Using ID</title>
    <style>
        body{
            padding: 50px;
            margin: 50px auto;
            border: 5px solid red;
            width:80%;
            font-size: 26px;
        }
        /* div, form{
            font-size: 26px;
            color: green;
            font-weight: bold; */
        /* } */
    </style>
</head>
<body>
    <h1>Manufacturer Data Delete By Using ID</h1>

    <form action="" method="post">
        <label for="id">Select Manufacturer ID</label><br><br>
        <select name="del_id" id="">
            <option value="" disabled selected>---Select Manufacturer ID---</option>
            <?php  while($d =  mysqli_fetch_assoc($menuDATA)){ ?>
            <option value="<?php echo $d['manufacturer_id']; ?>"><?php echo $d['manufacturer_id']; ?></option>
            <?php } ?>
        </select><br><br>
        <input type="submit" name="submit"  value="Delete Manufacturer" id="">
    </form><br><hr><br>
    <h1><?php if(isset($delSMS)){ echo $delSMS;} ?></h1>

</body>
</html>


