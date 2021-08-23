<?php
class Member{
  public $Name="Masud Alam";
  public $Email="masud@mail.com";
  public $mobile="01788990099";
  public  $address="Dhaka,Bangladesh";
  public function __sleep(){
    return ["Name","Email"];
  }
}
  
$member = new Member();
  
$memberString = serialize( $member );
 
echo $memberString;
?>