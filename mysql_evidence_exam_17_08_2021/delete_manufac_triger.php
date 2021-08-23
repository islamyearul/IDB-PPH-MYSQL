<?php

$mysqli =  new mysqli("localhost", "root", "", "exam_idb") or die("Connection Error");
$select = "SELECT * FROM `manufacturer` ";
$datas = $mysqli->query($select);

if(isset($_POST['submit'])){
    extract($_POST);

    $query = "DELETE FROM `manufacturer` WHERE m_id = $m_id";
    $del = $mysqli->query($query);
    if(isset($del)){
        echo "<h2>Manufacturer delete Success</h2>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triger</title>
    <style>
        body{
            padding: 50px;
            margin: 50px auto;
            border: 5px solid red;
            width:80%;
            font-size: 26px;
        }
        h2{
            
            color: red;
        }

    </style>
</head>
<body>
    <h3>Manufacturer Data Delete By Using Triger</h3>
    <form action="" method="post">
        <label for="">Please Select Manufacturer Id </label><br>
        <select name="m_id" id="">
                <option value="" selected disabled>--Select One--</option>
                <?php while($data = mysqli_fetch_assoc($datas)){ ?>
                    <option value="<?php echo $data['m_id'] ;?>"><?php echo $data['m_id'] ;?></option>

                <?php } ?>
        </select><br><br>
        <input type="submit" name="submit" value="Delete Manufacturer" id="">

        
    </form>
</body>
</html>