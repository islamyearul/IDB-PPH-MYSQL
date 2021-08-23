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

if($_SERVER['REQUEST_METHOD']=='POST'){
      extract($_POST);
      echo $name . "<br>";

      echo $email . "<br>";
     if(isset($lang)){
        foreach($lang as $langs){
            echo $langs . " , ";
        }
     }
      echo "<br>";
      if(isset($tsp)){
        foreach($tsp as $ts){
            echo $ts . ",";
        }
      }
  }
  ?>




    <form action=" <?php echo $_SERVER['PHP_SELF'] ?> " method="post">
     <label for=""> Youur Name: </label> 
     <input type="text" name="name"><br><br>
     <label for=""> Email Address:</label>
     <input type="email" name="email"> <br><br>
     <label for=""> Favourite Programme Language: </label>
     <select name="lang[]" id="" multiple="multiple">
         <option value="C#">C#</option>
         <option value="Java Script">Java Script</option>
         <option value="Perl">Perl</option>
         <option value="PHP">PHP</option>
      </select> <br><br>

      <label for="">TSP: </label>
       <input type="checkbox" name="tsp[]" value="COGENT">COGENT 
       <input type="checkbox" name="tsp[]" value="TCLD">TCLD 
       <input type="checkbox" name="tsp[]" value="NEW HOR">NEW HOR 
       <input type="checkbox" name="tsp[]" value="BHUIYA">BHUIYA  <br><br>

      <input type="submit" name="submit" value="Send">
    </form>

 

</body>
</html>