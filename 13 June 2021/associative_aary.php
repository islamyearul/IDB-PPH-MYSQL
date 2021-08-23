<?php 
    $stuInfo = array("karim"=>40, "Rahim"=>48, "Hasan" =>45, "Jamal" =>47, "Manik" =>35, "Hasan" =>45);
   
        ?>

<table border="1" >
       <tr>
            <th>Name</th>
            <th>MCQ</th>
        </tr>
<?php  foreach ($stuInfo as $key => $value) { ?>
        <tr>
            <td> <?php echo $key?></td>
            <td> <?php echo $value?></td>
        </tr>

    <?php 
    }
    ?>

</table>

