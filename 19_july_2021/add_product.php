<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Entry Form</h2>
    <?php
    
    if(isset($_POST['submit'])){
        extract($_POST);
        require_once("sql_config.php");
        $sql = "INSERT INTO products VALUE('$sku', '$pr_name', '$pr_price')";
        $mysqli-> query($sql);


    }
    
    ?>

    <form action="" method="post">

    <input type="text" name="sku" placeholder="Enter Your SKU"> <br><br>
    <input type="text" name="pr_name" placeholder="Enter Pruduct Name"><br><br>
    <input type="text" name="pr_price" placeholder="Price"><br><br>
    <input type="submit" name="submit" value="Add Product">
    </form>
    <a href="products.php">Product List</a>
</body>
</html>