<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<form action="" name="form" method="post">
		<input type="text" name="marks" placeholder="Maks"><br><br>
		<input type="submit" name="submit" value="Check">
	</form>
</body>
</html>

<?php 



// print_r($_POST);
if ($_SERVER['REQUEST_METHOD']=='POST') {


		if ($_POST['marks'] >= 40) {
			echo "Congratulation";
		} else {
			echo "OPPS!!!";
		}

}

 ?>