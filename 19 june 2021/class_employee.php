<?php


class Employee{

    private $name;
    public $email;
    public $phone;

    public function setName($uname){
        $this->name = $uname;
    }
    public function getName(){
        return $this->name;
    }
    public function  sayHello(){
        echo "Hello My Name Is {$this->getName()}" . "<br>";
    }



}

$emp1 = new Employee;
$emp1-> setName("Islam");
$emp1->sayHello();
$emp1->email = "islamyearul@gmail.com";
$emp1->phone = "01825682260";


$emp2 = new Employee;
$emp2-> setName("Saiful");
$emp2->sayHello();
$emp2->email = "saifull@gmail.com";
$emp2->phone = "0185456554545";


// echo "<pre>";
// print_r($emp1);
// print_r($emp2);

// echo $emp1->getName();
// echo "<br>";
// echo $emp2->getName();

?>