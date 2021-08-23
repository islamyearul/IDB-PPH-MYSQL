
<?php
$mysqli = new mysqli("localhost", "root", "", "fifteeenaug") or die("Connection Error");

if(isset($_POST['submit'])){
    extract($_POST);
    $procedure = "CALL insert_manufacturer('$m_name','$m_address','$m_contact')";
    $strpcr =  $mysqli->query($procedure);
    if($strpcr){
        echo "Data Added";
    }
}



?>


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
        <h3>Insert Data in Menufacturer By Using Store Procedure</h3>
        <input type="text" name="m_name" placeholder="Manufacturer Name"><br><br>
        <textarea name="m_address" id="" cols="30" rows="5"></textarea><br><br>
        <input type="number" name="m_contact" id="" placeholder="Menufacturer"><br><br>
        <input type="submit" name="submit" value="Insert Menufacturer" id="">

    </form>
</body>
</html>