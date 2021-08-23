<?php
 
  
    $students = array();

         $students[] = array(
             "Name" => "Student1",
             "ID" => "1",
             "MCQ" => "40",
             "Descriptive" => "37",
             "Evidence" => "30",
         );
         $students[] = array(
            "Name" => "Student2",
             "ID" => "2",
             "MCQ" => "28",
             "Descriptive" => "40",
             "Evidence" => "40",
         );       
         $students[] = array(
            "Name" => "Student3",
             "ID" => "3",
             "MCQ" => "38",
             "Descriptive" => "40",
             "Evidence" => "40",
         );       


?>


<table border="1">
     <thead>
         <tr>
             <th>ID</th>
             <th>Name</th>
             <th>MCQ</th>
             <th>Descriptive</th>
             <th>Evidence</th>
             <th hidden>MCQ & Des</th>
             <th>Result</th>
         </tr>
     </thead>
     <tbody>
         <?php foreach($students as $student){ extract($student);  ?>
         <tr>
             <td><?php echo $ID; ?></td>
             <td><?php echo $Name; ?></td>
             <td><?php echo $MCQ; ?></td>
             <td><?php echo $Descriptive; ?></td>
             <td><?php echo $Evidence; ?></td>
             <td hidden><?php $mcq_des = (int)$MCQ+  (int)$Descriptive; ?></td>
             <td><?php if($mcq_des>= 70 && $Evidence >=30){echo "Pass";} 
             else {
                 echo "Fail"; }  ?></td>
         </tr>

         <?php }  ?>
     </tbody>
</table>
