<?php include("footer_function.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            text-align: center;
        }
    *{
        margin: 0;
        padding: 0;
    }

        .mydiv{
          
            text-align: center;
            background-color: antiquewhite;
            padding: 20px 0;
            margin-bottom: 50px;
        }
        .footer{
            text-align: center;
            background-color: antiquewhite;
            padding: 20px 0;
            margin-top: 50px;
        }
        a{
            display: inline-block;
            padding: 0 10px;
            text-decoration: none;
            color: brown;
            transition: color .5s;
            
        }
        a:hover{
            color: black;
        }
    </style>
</head>
<body>
    <div class="mydiv">
    <a href="include.php">Home</a>
    <a href="about.php">About</a>
    <a href="contact.php">Contact</a>
    <a href="">Galary</a>
    <a href="">Log in</a>

    </div>