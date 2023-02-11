<?php
 include ("../model/SupplierModel.php");
 $sid=$fname=$lname=$age=$gen=$contNo=$email=$pass="";
 session_start();

if(!isset($_SESSION["sid"])){
  header("location: ../View/login.php");
};
if(isset($_POST["ViewInfo"]))
{ 
 $mydb=new DB();
 $conobj=$mydb->opencon();
 $mydata=$mydb->viewAccInfo($conobj,"supplierinfo",$_SESSION["sid"]);

if($mydata->num_rows > 0){
  while($row=$mydata->fetch_assoc())
      {
      $sid=$_SESSION["sid"];
      $fname=$row["fname"];
      $lname=$row["lname"];
      $age=$row["age"];
      $gen=$row["gen"];
      $contNo=$row["contNo"];
      $email=$row["email"];
      $pass=$row["pass"];

    }
      }
      else{
        echo "no data found";
    }     
  }
  if(isset($_POST["UpdateInfo"]))
{
$mydb=new DB();
 $conobj=$mydb->opencon();
 $mydb->updateAccInfo("supplierinfo",$_SESSION["sid"],$_POST["fname"],$_POST["lname"],$_POST["age"],$_POST["gen"],$_POST["contNo"],$_POST["email"],$_POST["pass"],$conobj);
} 
 


?>
