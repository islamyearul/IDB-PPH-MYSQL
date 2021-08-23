<?php 


	$datas = file("file.txt");

	// echo "<pre>";

	// print_r($data);


	// foreach ($datas as $data) {
	// 	list($name, $email, $age) = explode(",", $data);
	// 	echo "Name: $name, Email: $email, Age: $age <br>";
		
	// }
//show by table
 // echo "<table border=1>";
 //  echo "<tr><th>Name</th><th>Email</th><th>Age</th></tr>";

	// foreach ($datas as $data) {
	// 	list($name, $email, $age) = explode(",", $data);
	// 	 echo "<tr><td>$name</td><td>$email</td><td>$age</td></tr>";
	// }

 // echo "</table>";

 ?>


 <table border="1">
 	<tr>
 		<th>Name</th>
 		<th>Email</th>
 		<th>Age</th>
 	</tr>

<?php foreach ($datas as $data) {

	list($name, $email, $age) = explode(",", $data);?>

 	<tr>
 		<td><?php echo $name ?></td>
 		<td><?php echo $email ?></td>
 		<td><?php echo $age ?></td>
 	</tr>
<?php } ?>

 </table>