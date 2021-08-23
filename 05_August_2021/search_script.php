<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Please Input Your Text here</h3>

    <form action="" method="post">
    
    <input type="text" name="input" placeholder="Enter your Text"><br><br>
    <input type="submit" name="search" value="Search">

    </form>
</body>
</html>

<?php 
 $mysqli = new mysqli("localhost", "root", "", "islam") or die("Connection Error");


 if(isset($_POST['search'])){
     $input = $_POST['input'];
     $query = "SELECT name,url FROM bookmarks WHERE MATCH(description) AGAINST 
     ('$input')";

     $datas = $mysqli->query($query);
 }
?>
<table border="1">
    <tr>
        <th>Name</th>
        <th>URL</th>
    </tr>
    <?php while(@$data = mysqli_fetch_assoc($datas)){ ?>
    <tr>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['url']; ?></td>
    </tr>
    <?php } ?>
</table>