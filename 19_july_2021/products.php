<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require_once("sql_config.php");
$qrr = "SELECT * FROM products";
$data = $mysqli->query($qrr);
?>


<table class="table" border="1">
    <thead>
        <tr>
            <th>SKU</th>
            <th>P Name</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
while($res = mysqli_fetch_assoc($data)){ ?>
        <tr>
            <td> <?php echo $res['sku']; ?> </td>
            <td> <?php echo $res['name']; ?> </td>
            <td> <?php echo $res['price']; ?> </td>
            <td>
                <a href="" >Delete</a> ---
                <a href="" >Edit</a>
            </td>
            <?php

}

?>

        </tr>

    </tbody>
</table>
<?php  ?>



</body>
</html>