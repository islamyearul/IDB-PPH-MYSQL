<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" >

    <label for=""> Chose Date</label><br>
    <input type="date" name="date"> <br>
    <input type="submit" name="submit" value="Check">



    </form>
</body>
</html>

<?php
  

  if(isset($_POST['submit'])){
      $input = $_POST['date'];

//       $n =strtotime($input);
//    echo $n;

       $day = date("d", strtotime($input));
       $week = date("l", strtotime($input));
       $month = date("F", strtotime($input));
       $year = date("Y", strtotime($input));

       echo "Day= $day, <br> Week= $week, <br> Month= $month, <br> Year= $year";
  }



?>