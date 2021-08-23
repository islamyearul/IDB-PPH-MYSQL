
<form action="" name="form" method="post">
	<input type="text" name="name" placeholder="Enter Your Name"><br>
	<label for="gender">Gender</label> &nbsp; &nbsp;
		<input type="radio" value="Male" name="gender">Male  &nbsp;
		<input type="radio" value="Female" name="gender">Female  <br>
	<label for="district">District: </label><br>
	<select name="district">
		<option value="">--Select One--</option>
		<option value="Dhaka">Dhaka</option>
		<option value="Noakhali">Noakhali</option>
		<option value="Bogra">Bogra</option>
		<option value="Khulna">Khulna</option>
		<option value="Borishal">Borishal</option>
	</select> <br>
	<label for="address">Address: </label><br>
	 <textarea name="address" id="" cols="30" rows="5"></textarea> <br>
	 <input type="submit" value="Submit">	
</form>

<?php 
// print_r($_POST);

 if ($_SERVER['REQUEST_METHOD']=='POST') {


 	     echo "<h1>";
		 echo "Name Is: " . $_POST['name'] ."<br>";
		 echo "Gender Is: " . $_POST['gender'] ."<br>";
		 echo "District Is: " . $_POST['district'] ."<br>";
		 echo "Address Is: {$_POST['address']}";

 }
   

 ?>






