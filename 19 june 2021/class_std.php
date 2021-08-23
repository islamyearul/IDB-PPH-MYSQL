<?php

class Student {
    private $name;
    private $email;
    private $phone;
    
    public function setInfo($name, $email, $phone){
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function getInfo(){
        $n = $this->name;
        $e = $this->email;
        $p = $this->phone;
        echo "<h2>Here is my all information </h2>";
        echo "Name: $n <br>";
        echo "Email: $e <br>";
        echo "Phone: $p <br>";
    }
}


?>