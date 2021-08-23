<?php
    class Data{
      private $conn;
     public function __construct()
     {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = "";
        $dbname = 'company';
        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
       
        if(!$this->conn){
            die("Database Connection Error");
       }      
     }
     public function selectData($data){
         $uname =  $data['u_name'];
         $upass =  $data['u_password'];

        $query = "SELECT * FROM user WHERE user_name = '$uname'";
        $ress = mysqli_query($this->conn, $query) ;
       
        if(mysqli_num_rows($ress) > 0){
            $res = mysqli_query($this->conn, $query);
            $result = mysqli_fetch_assoc($res);
            if($result['user_name'] == $uname && $result['user_password'] == $upass){
                return "User Data Match";
    
            } else {
                return "User Password Does Not Match";
            }
       } else {
           return "User Name Does not match";
       }
     }

    }

    //End of Class

    $obj = new Data();
   if(isset($_POST['submit'])){
      
    $returnSMS = $obj->selectData($_POST);

   }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Match With SQl</title>
    <style>
        body{
            padding: 50px;
            margin: 100px auto;
            border: 5px solid red;
            width: 40%;
        }
        div{
            font-size: 26px;
            color: white;
            font-weight: bold;
            background-color: purple;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div> <?php if(isset($returnSMS)){   echo $returnSMS; } ?> </div>
    <form action="" method="post">
        <input type="text" name="u_name" placeholder="Enter User Name"><br><br>
        <input type="password" name="u_password" placeholder="Enter User Password"><br><br>
        <input type="submit" name="submit" id="" value="Login">
    </form><br><br>
   
</body>
</html>


