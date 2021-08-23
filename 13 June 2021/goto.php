<?php 

    for ($i=0; $i < 10; $i++) { 

        $randNum = rand(1,50);

        if ($randNum<10) {
            goto less;
        }else{
            echo "Number greater then 10: $randNum <br>";
        }
    }

    less:
    echo "Number Less then 10: $randNum <br>";

  
?>