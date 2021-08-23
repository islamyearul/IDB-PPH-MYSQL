<?php
 // Preset authentication status to false
 $authorized = false;
 if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
 // Read the authentication file into an array
 $authFile = file("authentification.txt");
 // Search array for authentication match
 foreach ($authFile as $login ) {
 list($user, $pass) = explode(":", $login);

 $pass = trim($pass);

if (($user == $_SERVER['PHP_AUTH_USER']) && ($pass == md5($_SERVER['PHP_AUTH_PW'])))
 break;
 }


    if (!$authorized) {
    header('WWW-Authenticate: Basic Realm="Secret Stash"');
    header('HTTP/1.0 401 Unauthorized');
    print('You must provide the proper credentials!');
    exit;
    }
}
    // restricted material goes here...
   ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
</body>
</html>