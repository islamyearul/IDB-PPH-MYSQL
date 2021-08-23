<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "classicmodels";

$conn = @mysqli_connect($dbhost, $dbuser, $dbpass) OR die ("Failed to connect with MySql server");
mysqli_select_db($conn, $dbname) or die ("Failed to select database");

$sql = mysqli_query($conn, "SELECT * FROM employees");



while($data = mysqli_fetch_array($sql)){
    ///echo "<pre>";
    //print_r($data);
    echo $data['lastName']. "<br>";
}

















?>