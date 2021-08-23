

<table border="1">

<?php
$datas = file("student.txt");
echo "<pre>";

echo "<tr><th>Name</th><th> Email</th><th>Phone</th><tr>";
foreach($datas as $data){
   list($name, $email, $phone) = explode(",", $data);
   echo "<tr><td> $name </td><td> $email</td><td> $phone</td></tr>";
}




// foreach( $data as $text){
//     echo $text."<br>";
// }





?>



</table>