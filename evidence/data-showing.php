

    <!-- <form action="" method="post">
        <input type="number" name="input" placeholder="Enter Id For Watch Result"> <br><br>
        <input type="submit", name="submit" value="Check Result">
    </form>
    <br><hr><hr><br><br>

    <table>
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
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table> -->

<?php
 
 class student{
    // private $outid;
    // private $name;
    // private $course;
    // private $result;

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

        if($id == $userid){
          echo "$name is ";
          break;
        }
       }
    }

 }

      $obj = new student("std.txt");
      $obj->result(1);
    
  
?>