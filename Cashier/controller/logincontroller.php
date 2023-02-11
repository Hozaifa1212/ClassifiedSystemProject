<?php

session_start();


/*?>

 <?php 

    if(isset($_POST['submit'])){

      


      $old_data = file_get_contents("../file/cashir.json");

      $array_data = json_decode($old_data,true);

     
     foreach ( $array_data as $value) {
        
       if($value['cid'] == $_POST['cid'] && $value['password'] == $_POST['password']){


          $_SESSION["email"] = $value['email'];

          header('location:casherpage.php');               


       }else{





       }

     }

    }


  ?>*/
  include ("../model/Cashiermodel.php");
$cid=$pass="";
$idErr=$passErr=$loginErr="";
$lgnflag=FALSE;
$flag=0;



  if (($_SERVER["REQUEST_METHOD"] == "POST")&&(isset($_POST["submit"]))){
     if (empty($_POST["cid"])) {
          $idErr = "* ID is required";
        } else {
              $cid  =$_POST["cid"];
              $flag++;
        }
        echo"<br>";  
          if (empty($_POST["pass"])) {
      $passErr = "* please enter a valid password and this field is required";
              } else {
            $pass = $_POST["pass"];
              $flag++;
               }
          echo"<br>";

      if($lgnflag===FALSE){  
        $mydb=new DB();
        $conobj=$mydb->opencon();
        $mydata=$mydb->login($cid,$pass,"cashierinfo",$conobj);
        if($mydata->num_rows > 0){
          while($row=$mydata->fetch_assoc())
          {
           //logged in
           $_SESSION['cid'] = $row["cid"];
           $lgnflag=TRUE;
        $mydb->closecon($conobj);
                 break;}
          }else{
            echo "no data found";
        }
       }
  if($lgnflag===TRUE &&  $flag==2){
      header('location:casherpage.php');
   }else{
    $loginErr ="please enter a valid information";
}
  }