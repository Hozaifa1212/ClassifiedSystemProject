<?php
 include ("../model/SupplierModel.php");
 $sid=$fname=$lname=$age=$gen=$contNo=$email=$pass="";

 //$firstname=$lastname=$age=$gender=$contNo=$email=$sid="";
//$_SESSION["sid"]=$_SESSION["sname"]=$_SESSION["email"]=$_SESSION["address"]="";

session_start();
if(isset($_SESSION["sid"])){

  header("location: ../View/login.php");

};


$mydb=new DB();
 $conobj=$mydb->opencon();
 $mydata=$mydb->viewRegisteredAccInfo($conobj,"supplierinfo",$_SESSION["email"],$_SESSION["pass"]);
 
 if($mydata->num_rows > 0){
  while($row=$mydata->fetch_assoc())
      {
      $_SESSION["sid"]=$row["sid"];
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
  
  /*
echo '<h3 align="center">Your Registration Info</h3>';
                echo '<table border="1" width="200" align="center"';
echo "<tr> <td>";
echo "Your have successfully registered"."<br>";
echo "Your First name:".$_SESSION["firstname"]."<br>";
echo "Your lastname :".$_SESSION["lastname"]."<br>";
echo "Your age :".$_SESSION["age"]."<br>";
echo "Your gender :".$_SESSION["gender"]."<br>";
echo "Your contact No :".$_SESSION["contNo"]."<br>";
echo "Your email :".$_SESSION["email"]."<br>";
echo "Your Supplier id :".$_SESSION["sid"]."<br>";
  echo "</td></td>";
         echo "</table>";  
  */
  $mydb->closecon($conobj);
session_destroy();

?>
