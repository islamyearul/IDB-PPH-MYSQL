<?php 


 $datas = file_get_contents("student.txt");
 $persons = explode("\n", $datas);
   
    foreach($persons as $person){
        list($name, $email,$phone) = explode(",", $person);
        echo "Name: $name  Email: $email Phone: $phone <br>";
    
    }
 
   











?>