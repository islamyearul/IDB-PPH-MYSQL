<?php
class propertyTest{
    private $data = array();

    public function __set($name, $value){
        #echo "Setting '$name' Property to '$value' \n";
       $this->data[$name]= $value;
    }
    public function __get($name){
        ## if(array_key_exists($name, $this->data)){
            return $this->data[$name];
        #}
    }
    public function __isset($name)
    {
        echo "Is '$name' Property set?\n";
        echo isset($this->data[$name])?"Yes '$name' Property is set":"No '$name' Property is Not set";
        echo "\n";
    }

    public function __unset($name)
    {
        echo "Unsetting '$name'\n";
        unset($this->data[$name]);
    }
}


 $obj1 = new propertyTest;
 $obj1->a ="Abul";
 $obj1->b ="Babul";
 $obj1->c ="Saiful";
 $obj1->d ="Rohinga";
 $obj1->e ="Bablu";
 $obj1->f ="Muazzem";


 echo $obj1->a . "\n";
isset($obj1->a);
isset($obj1->b);
isset($obj1->c);
isset($obj1->d);
unset($obj1->e);
isset($obj1->e);
isset($obj1->f);

 #print_r($obj1);
 #var_dump($obj1);



 #echo $obj1->a . "\n";

 