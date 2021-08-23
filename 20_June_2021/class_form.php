<?php 

 class formData {
 	private $fname;
 	private $lname;
 	private $bday;
 	private $email;
 	private $phone;
 	private $gender;
 	private $address;
 	private $city;
 	private $pin;
 	private $state;
 	private $country;
 	private $hobies;

 	public function setInfo($fname, $lname, $bday, $email, $phone, $gender, $address, $city, $pin, $state, $country, $hobies){
 		$this->fname = $fname;
 		$this->lname = $lname;
 		$this->bday = $bday;
 		$this->email = $email;
 		$this->phone = $phone;
 		$this->gender = $gender;
 		$this->address= $address;
 		$this->city = $city;
 		$this->pin = $pin;
 		$this->state = $state;
 		$this->country= $country;
 		$this->hobies= $hobies;
 	}

 	public function getInfo(){
 		$f = $this->fname;
 		$l = $this->lname;
 		$b = $this->bday;
 		$e = $this->email;
 		$p = $this->phone;
 		$g = $this->gender;
 		$a = $this->address;
 		$ci = $this->city;
 		$pi = $this->pin;
 		$s = $this->state;
 		$co = $this->country;
 		$ho = $this->hobies;

 	    echo "<h2>Here is my all information </h2>";
        echo "First Name: $f <br>";
        echo "Last Name: $l <br>";
        echo "Email: $e <br>";
        echo "Phone: $p <br>";
        echo "Birthday: $b <br>";
        echo "Gender: $g <br>";
        echo "Address: $a <br>";
        echo "City: $ci <br>";
        echo "Pin: $pi <br>";
        echo "State: $s <br>";
        echo "Country: $co <br>";
        echo "Hobbies: $ho <br>";
 	}

 }
 
 ?>