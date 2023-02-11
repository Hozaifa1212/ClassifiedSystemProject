



<?php

    $q=$_GET["q"];
    


    $con = mysqli_connect('localhost','root','','classified-system');
    if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    }


    $sql="DELETE  FROM employee_info WHERE User_Name ='$q'";
    echo '<h1>'.$q.'</h1>';
    $result = mysqli_query($con,$sql);

    
    if($result){
        echo '<h1>deleted</h1>';
    }
    
    
    

    mysqli_close($con);

  ?>