<?php 



class simpleClass{
   static public $var = 'Today is Thursday';
    private const B="Bangladesh";
    public function display(){
        //echo $this->var;
       // echo simpleClass::B . "<br>";  //scope regulation sign::
        echo self::B. "<br>";  //scope regulation sign::
        echo self::$var. "<br>";  //scope regulation sign::
    }
}


$obj1 = new simpleClass;
$obj1->display();

















// echo simpleClass::B;

?>