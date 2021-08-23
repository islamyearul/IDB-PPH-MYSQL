
<?php

class opp{
    public function __construct(){
        echo "Welcome to PHP Constructor";
    }

    public function sayHelo(){
        echo "Hello World";
    }

    public function __destruct()
    {
        echo "<br> I am about to disappear -- Bye Bye";
    }
    

}


new opp;