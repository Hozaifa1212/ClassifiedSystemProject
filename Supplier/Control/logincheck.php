<?php
include ("../model/SupplierModel.php");
$sid=$pass="";
$idErr=$passErr=$loginErr="";
$lgnflag=FALSE;
$flag=0;

session_start();
if(isset($_SESSION["sid"])){
  header("location: ../View/home.php");
};
  if (($_SERVER["REQUEST_METHOD"] == "POST")&&(isset($_POST["Login"]))){
	   if (empty($_POST["sid"])) {
          $idErr = "* Name is required";
        } else {
              $sid  =$_POST["sid"];
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
        $mydata=$mydb->login($sid,$pass,"supplierinfo",$conobj);
        if($mydata->num_rows > 0){
          while($row=$mydata->fetch_assoc())
          {
           //logged in
           $_SESSION['sid'] = $row["sid"];
           $lgnflag=TRUE;
        $mydb->closecon($conobj);
                 break;}
          }else{
            echo "no data found";
        }
       }
  if($lgnflag===TRUE &&  $flag==2){
    header("location: ../View/SupplierDashboard.php");
	 }else{
    $loginErr ="please enter a valid information";
}
  }
 
?>
