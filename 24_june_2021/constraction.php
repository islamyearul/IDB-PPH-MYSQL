<?php

class opp{
    public function __construct(){
        echo "This is automatic Constructor <br>";
    }

    public function sayHelo(){
        echo "Say Hello, This is not automatic ";

    }

    
}

$obj = new opp;
$obj->sayHelo();