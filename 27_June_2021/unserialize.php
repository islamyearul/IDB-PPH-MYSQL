<?php
class Member
{
  public $username = "";
  private $loggedIn = false;
   
  public function login() {
    $this->loggedIn = true;
  }
   
  public function logout() {
    $this->loggedIn = false;
  }
   
  public function isLoggedIn() {
    return $this->loggedIn;
  }
}
  
$member = new Member();
$member->username = "Farhan";
$member->login();
  
$memberString = serialize($member);
$member2 = unserialize( $memberString );
echo $member2->username . " is " . ( $member2->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";
  

?>