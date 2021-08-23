<?php
    $mysqli = new mysqli("localhost", "root", "", "fifteeenaug") or die("Connection Error");
    $show = "SELECT * FROM `product_price_views` ";
    $datas =  $mysqli->query($show);





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
</head>
<body>
    <h3>Products View Wherer Price between 2000 to 6000</h3>
    <table border="1">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Manufacturer ID</th>
            </tr>
        </thead>
        <tbody>
            <?php while($data = mysqli_fetch_assoc($datas)){ ?>
                <tr>
                    <td><?php echo $data['p_id']; ?></td>
                    <td><?php echo $data['p_name']; ?></td>
                    <td><?php echo $data['price']; ?></td>
                    <td><?php echo $data['manufacturer_id']; ?></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>

</body>
</html>