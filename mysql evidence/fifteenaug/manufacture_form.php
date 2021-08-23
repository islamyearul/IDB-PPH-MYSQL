<?php

$mysqli = new mysqli("localhost", "root", "", "fifteeenaug") or die("Connection Error");
$select  = "SELECT * FROM `manufacturer`";
 $datas = $mysqli->query($select);

if(isset($_POST['submit'])){
    extract($_POST);
    $delete = "DELETE FROM `manufacturer` WHERE id =$m_id ";
    $datas = $mysqli->query($delete);
    if($datas){
        echo "data delete success";
    }
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer Form</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Selec Manufacturer Id For Delete Manufacturer</label><br><br>
        <select name="m_id" id="">
            <option value="" selected disabled>--Select Id--</option>
            <?php while($data = mysqli_fetch_assoc($datas)) {?>
            <option value="<?php echo $data['id']; ?>"><?php echo $data['id']; ?></option>
            <?php } ?>
        </select><br><br>
        <input type="submit" name="submit" value="Delete Manufacturer" id="">
    </form>
</body>
</html>