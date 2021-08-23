<?php

$mysqli = new mysqli("localhost", "root", "", "company") or die("Connection Error");
$query =  "SELECT * FROM products_by_price";
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
  <td>Product ID</td>
  <td>Product Name</td>
  <td>Product Price</td>
  <td>Manufarturer Name</td>
</tr>
</thead>
<tbody>
<?php while($view = mysqli_fetch_assoc($viewDATA)){ ?> 

<tr>
  <td><?php echo $view['products_id'] ?></td>
  <td><?php echo $view['Product_Name'] ?></td>
  <td><?php echo $view['price'] ?></td>
  <td><?php echo $view['Manufacturer_Name'] ?></td>
</tr>

<?php } ?>
</tbody>
</table>
</div>
</body>
</html>