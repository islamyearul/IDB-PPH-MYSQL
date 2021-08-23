<?php 
echo "<pre>";
setcookie("username", "Mahbub", time()+10);
setcookie("city", "Dhaka", time()+10);
setcookie("Country", "Bangladesh", time()+10);
setcookie("Area", "Paltan", time()+10);
setcookie("Age", "26", time()+10);

print_r($_COOKIE);

 ?>

<?php 
