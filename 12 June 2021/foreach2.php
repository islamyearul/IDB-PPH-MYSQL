
<h2>Associative array interation</h2>








<?php 

	$resources = array ("PHP" => "www.php.net", "MySQL" => "www.mysql", "PHP Resources" => "www.phpresources.com");
	foreach ($resources as $key => $val) {  ?>
		<a href=""> <?php echo $val; ?> </a> <br>

	<?php  	
	}


 ?>