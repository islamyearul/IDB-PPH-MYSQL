<?php

class member{
    public $username="";
    private $loggedIn = false;
    public function login(){
        $this->loggedIn = true; 
    }
    public function logout(){
        $this->loggedIn = false;
    }
    public function isLoggedIn(){
        return $this->loggedIn;
    }
}

class member2 extends member{
    public function login(){
        $this->loggedIn = true; 
        echo "Log Entry $this->username logged in <br>";
    }
}

$obj1 = new member;
$obj1->username="Islam";
$obj1->login();

echo $obj1->username . " is " . ($obj1->isLoggedIn() ? "Logged In" : "Logged Out")."<br>";
$obj1->logout();

echo $obj1->username . " is " . ($obj1->isLoggedIn() ? "Logged In" : "Logged Out")."<br>";

$obj1 = new member2;
$obj1->username="Yearul";
$obj1->login();