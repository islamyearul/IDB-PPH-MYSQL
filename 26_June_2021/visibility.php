<?php
class grandfather{
    protected $name="Siddique Ullah";
  public function getName(){
        return $this->name;
    }

}


class daddy extends grandfather{
    public function displaygrandname(){
        return $this->name;
    }
}

$obj1 = new grandfather;
echo $obj1->getName()."<br>";


$obj2 = new daddy;
echo $obj2->displaygrandname();


?>