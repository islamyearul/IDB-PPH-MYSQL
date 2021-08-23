<?php 

  class fruit{
  	public $name;
  	public $color;

  	public function __construct($n, $c){
  		$this->name=$n;
  		$this->color=$c;

  	}

    public function intro(){
      echo "The fruit is {$this->name} and the color is {$this->color}. <br>";
    }

  }

  //end fruit class

  class Strawberry extends fruit{
    public function massage(){
      echo "Am i a fruit or Barry <br>";
    }
  }

  $fri = new fruit("Apple", "Blue");
  $fri->intro();
  $fri2 = new fruit("Mango", "Red");
  $fri->intro();

  $fr3 = new Strawberry("Strawberry", "Red");
  $fr3->massage();
  $fr3->intro();

  // print_r($fri2);

 ?>