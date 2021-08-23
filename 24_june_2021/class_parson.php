<?php


// class parson{
//     private $name ="";
//     private $age ="";
// public function setName($name=""){
//     $this->name = $name;
// }
// public function setAge($age=20){
//     $this->age = $age;
// }
// public function getInfo(){
//     echo "My name is {$this->name} and My Age is {$this->age} <br>.";
// }

// }

// $obj1 = new parson;

// $obj1->setName("Yearul");
// $obj1->setAge(27);
// $obj1->getInfo();




class parson{
    private $name ="";
    private $age ="";
public function setName($name=""){
    $this->name = $name;
    return $this;
    
}
public function setAge($age=20){
    $this->age = $age;
    return $this;
}
public function getInfo(){
  echo "My name is {$this->name} and My Age is {$this->age} <br>.";
}

}

$obj1 = new parson;
$obj1->setName('Yearul')->setAge('27')->getInfo();