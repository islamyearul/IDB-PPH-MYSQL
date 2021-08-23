<?php

// $host = 'localhost';
// $user = 'root';
// $pass = "";
// $database = 'islam';

// $conn = @mysqli_connect($host, $user, $pass, $database) OR die ("Failed to connect with MySql server");


// $query = "SELECT * FROM customerpayments";

// $data = $conn->query($query);
// print_r($data);



?>

<?php

class Data{

    private $conn;
    public function __construct()
    {
        #database Host, D-user, D-pass, D-name
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = "";
        $dbname = 'classicmodels';
        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        
        if(!$this->conn){
            die("Database Connection Error");
        }
        
    }

    public function view(){
        $query = "SELECT * FROM `customerpayments`";
        if(mysqli_query($this->conn, $query)){
            $data = mysqli_query($this->conn, $query);
            return $data;
        }
    }

}


$obj = new Data();
$info = $obj->view();

//  $DATA = mysqli_fetch_assoc($info);


//  echo "<pre>";

// print_r($DATA);




?>

<table border="1">
     
    <thead>
        <tr>
        <th>customerName</th>
        <th>contactFirstName</th>
        <th>orderNumber</th>
        <th>orderDate</th>
        </tr>
  
    </thead>
    <tbody>
       <tr>
       <?php while($DATA = mysqli_fetch_assoc($info)){  ?>

   
        <td><?php echo $DATA['customerName']?></td>
        <td><?php echo $DATA['contactFirstName']?></td>
        <td><?php echo $DATA['orderNumber']?></td>
        <td><?php echo $DATA['orderDate']?></td>
        </tr>
        <?php } ?>
    </tbody>

</table>