<?php
    $mysqli =  new mysqli("localhost", "root", "", "exam_idb") or die("Connection Error");
    $query =  "SELECT * FROM `product_greter_price`";
    $products = $mysqli->query($query);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product</title>
    <style>
        body{
            padding: 50px;
            margin: 100px auto;
            border: 5px solid red;
            width: 60%;
            font-size: 26px;
        }
    </style>
</head>
<body>
    <h3>Product View Where Price Grater Than 5000</h3>
    <table border="1">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Manufacturer ID</th>
        </tr>
        </thead>
        <tbody>
            <?php while($product = mysqli_fetch_assoc($products)){ ?>
                <tr>
                <td><?php echo $product['id']; ?></td>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['price']; ?></td>
                <td><?php echo $product['manufacturer_id']; ?></td>
                </tr>
            <?php } ?>
        </tbody>

   </table>
</body>
</html>