
<?php 

if(isset($_POST['submit'])){
    $id = $_POST['id'];

    $name = $_POST['name'];

    $designation = $_POST['designation'];

    $basic = (int)$_POST['basic'];

     $h_rent = (int)$_POST['h_rent'];
     $transport = (int)$_POST['transport'];

   @$total = $basic + $h_rent + $transport;

    
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
              body{
            padding: 50px;
            margin: 50px auto;
            border: 5px solid red;
            width: 40%;
            font-size: 26px;
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Total</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php  echo $id; ?></td>
            <td><?php  echo $name; ?></td>
            <td><?php  echo $total; ?></td>
        </tr>
    </tbody>
</table>
</body>
</html>

