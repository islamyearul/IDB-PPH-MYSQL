
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>

    <style>
        body{
            padding: 50px;
            margin: 50px auto;
            border: 5px solid red;
            width: 40%;
            font-size: 26px;
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
    




     <form action="" method="post">
         <label for="inp">Please Select Your Id</label>
     <select name="input" id="">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
   
     </select>   
     <br><br>
        <input type="submit", name="submit" value="Check Result">
    </form>

    <br><hr><hr><br><br>

   
    <?php
 
 class student{
    private $outid;
    private $name;
    private $course;
    private $result;

     private $data;


     public function __construct($file){
        //  $fh = fopen('info.txt', 'r');
        //  $this->file = $fh; 
        $data = file($file);
        $this->data = $data;
        // return $this->data;    
     }

     public function result($userid){

        // while(!feof($file)){
        //     $data = fgets($file);
        //     list($id, $name, $course, $result) = explode(",", $data);
        // }
       foreach ($this->data as $item) {
        list($id, $name, $course, $result) = explode(",", $item);

        if($id == $userid){ ?>
          
          <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Course</th>
                <th>Result</th>
            </tr>
        
        </thead>
        <tbody>
            <tr>
                <td> <?php echo  $id ?> </td>
                <td><?php echo  $name?> </td>
                <td><?php echo  $course ?> </td>
                <td><?php echo  $result ?> </td>
            </tr>
        </tbody>
    </table> 


          <?php
          break;
        }
       }
    }

 }

  if(isset($_POST['submit'])){
     $input = $_POST['input'];

      $obj = new student("info.txt");
      $obj->result($input);  

  }
?>



</body>
</html>