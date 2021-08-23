<?php 


   include("class_form.php");


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table{
  font-family: Calibri; 
  color:white; 
  font-size: 11pt; 
  font-style: normal;
  font-weight: bold;
  /* text-align:;  */
  background-color: SlateBlue; 
  border-collapse: collapse; 
  border: 1px solid navy;
  width: 800px;
}
.table1{
  padding-left: 20px;
}
.exam{
  text-align: center;
}
h3{
  font-family: Calibri; 
  font-size: 25pt;         
  font-style: normal; 
  font-weight: bold; 
  color:SlateBlue;
  text-align: center; 
  text-decoration: underline
}
  </style>
</head>
<body>

<?php 


    if($_SERVER['REQUEST_METHOD']=='POST'){
          $fname =$_POST['fname'];
          $lname =$_POST['lname'];
          $bday =$_POST['bday'];
          $email =$_POST['email'];
          $phone =$_POST['phone'];
          $gender =$_POST['gender'];
          $address =$_POST['address'];
          $city =$_POST['city'];
          $pin =$_POST['pin'];
          $state =$_POST['state'];
          $country =$_POST['country'];
          $hobies =$_POST['hobies'];


         $cls =  new formData;

         $cls->setInfo($fname, $lname, $bday, $email, $phone, $gender, $address, $city, $pin, $state, $country, $hobies);

         #cls->getInfo();


    }

 ?>



  <div class="table1">
    <form action="" name="form" method="post" class="formb">
      <center><h3><u>STUDENT REGISTRATION FORM</u></h3></center><br>
      <table align="center" cellpadding = "10">
        <tr>
          <td>First Name: </td>
          <td><input type="text" name="fname" maxlength="30"> &nbsp; (max 30 characters a-z and A-Z)</td>
        
        </tr>
        <tr>
          <td>Last Name: </td>
          <td><input type="text" name="lname" maxlength="30"> &nbsp; (max 30 characters a-z and A-Z)</td>
        </tr>
        <tr>
          <td>Date Of Birth: </td>
          <td><input type="date" name="bday"></td>

         </tr>


           <tr>
            <td>Email ID: </td>
            <td><input type="email" name="email"></td>
            
           </tr>
           <tr>
            <td>Mobile Number: </td>
            <td><input type="text" name="phone" maxlength="11"> &nbsp; (Max Number 11)</td>
           </tr>
           <tr>
            <td>Gender</td>
            <td><input type="radio" name="gender">Female <input type="radio" name="gender">Female</td>
           </tr>
           <tr>
            <td>Address:</td>
            <td><textarea name="address" id="" cols="50" rows="3"></textarea></td>
           </tr>
           <tr>
            <td>City: </td>
            <td><input type="text" name="city" maxlength="30"> &nbsp; (max 30 characters a-z and A-Z)</td>
           </tr>
           <tr>
            <td>PIN Code:</td>
            <td><input type="text" name="pin" maxlength="6">&nbsp; (6 digit number)</td>
           </tr>
           <tr>
            <td>State: </td>
            <td><input type="text" name="state"> &nbsp;(max 30 characters a-z and A-Z)</td>
           </tr>
           <tr>
            <td>Country: </td>
            <td><input type="text" name="country"></td>
           </tr>
           <tr>
            <td>Hobbies: </td>
            <td><input type="checkbox" name="hobies" value="Cricket">Cricket <input type="checkbox" name="hobies" value="Football">Football <input type="checkbox" name="hobies" value="HOcky">Hocky <input type="checkbox" name="hobies" value="Dancing">Dancing <input type="checkbox" name="hobies" value="Singing">Singing <br> <input type="checkbox" name="hobies" value="Comedy">Comedy <input type="checkbox" name="hobies" value="Other">Other</td>

      </table>
            <tr>
             <input type="submit" value="Submit">
           </tr>
    </form>
  </div>
</body>
</html>