<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vowel or Consonant</title>
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
    <h2>Vowel or Consonant Check</h2> <hr><br>

    <form action="" method="post">
        <input type="text" name="input" placeholder="Please Enter Alphabet" id=""><br><br>
        <input type="submit" name="submit" value="Check Vowel or Consonant">
    </form> <br><hr><br>


<?php

//    if(isset($_POST['submit'])){
//     $input = $_POST['input'];
//     $vowel =  array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");

//     $consonant = array("b", "B", "c", "C", "D", "d", "f", "F", "g", "G","H", "h", "j", "J", "K", "k", "L", "l", "M", "m", "N", "n", "P", "p", "Q", "q", "R", "r", "S", "s", "T", "t", "V", "v", "w", "W", "x", "X", "Y", "y", "Z", "z");

//     if(in_array($input, $vowel)){
//       echo "This Is Vowel";
//     } elseif ( in_array($input, $consonant)) {
//         echo " This Is Consonant"; 
//     } else {
//         echo " Please Enter a valid alphabet";
//     }
//   }




   if(isset($_POST['submit'])){
    $input = $_POST['input'];
    $vowel =  array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");

    if( is_int($input)===1){
        echo " Please Enter a valid alphabet";
    } 

    if(in_array($input, $vowel)){
        echo "This Is Vowel";
    } else {
        echo " This Is Consonant";
    }
  }
?>


</body>
</html>