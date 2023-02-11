<?php ?>

 <?php 

    if(isset($_POST['submit'])){


      $old_data = file_get_contents("../file/transection.json");

      $array_data = json_decode($old_data,true);

     

       $extra_array = array(

        'id' => $_POST['id'],
        'taka' => $_POST['taka'],
        
    
       );



       $array_data[] = $extra_array;


    

     if( file_put_contents("../file/transection.json",json_encode($array_data))){

      ?>

     <h1>Sussfully Done</h1>


      <?php
     }

     


      

     


    }

  ?>