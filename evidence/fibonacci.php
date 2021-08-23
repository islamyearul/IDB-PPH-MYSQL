<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
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
    <h2>Fibonacci Check</h2> <hr><br>

    <form action="" method="post">
        <input type="number" name="input" placeholder="Please Enter A Number" id=""><br><br>
        <input type="submit" name="submit" value="Check Fibonacci">
    </form> <br><hr><br>
<?php
  if(isset($_POST['submit'])){
    $number = $_POST['input'];
    // PHP code to get the Fibonacci series
        function Fibonacci($n){
  
             $num1 = 0;
             $num2 = 1;
            $counter = 0;
             while ($counter < $n){
              echo ' '.$num1;
                $num3 = $num2 + $num1;
                 $num1 = $num2;
                 $num2 = $num3;
                $counter = $counter + 1;
        }
}
         // Driver Code
          Fibonacci($number);

  }
?>


</body>
</html>