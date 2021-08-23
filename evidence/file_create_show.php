<?php

$myfile = fopen("file.txt" , "w") or die();
$text = "Yearul: yearul@gmail.com <br>" ;
fwrite($myfile, $text);
$text = "islam: islam@gmail.com <br>" ;
fwrite($myfile, $text);
$text = "saiful: saiful@gmail.com <br>" ;
fwrite($myfile, $text);
$text = "bablu: bablu@gmail.com <br>" ;
fwrite($myfile, $text);


$myfile = fopen("file.txt", "r");
$data = fread($myfile , filesize("file.txt"));

echo $data;















?>