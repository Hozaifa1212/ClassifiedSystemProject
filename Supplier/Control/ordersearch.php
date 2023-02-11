<?php
include ("../model/SupplierModel.php");
$proname="";
$idErr=$srchErr="";
$flag=FALSE;
$count=0;
//you can search only your orders(from your id)
session_start();
if(!isset($_SESSION["sid"])){

  header("location: ../View/login.php");

};
  if (($_SERVER["REQUEST_METHOD"] == "POST")&&(isset($_POST["Search"]))){
	   if (empty($_POST["proname"])) {
          $idErr = "* Product name is required";
        } else {
       
              $proname  =$_POST["proname"];
            $count++;
        }
        echo"<br>";  
         
         
     
        $mydb=new DB();
$conobj=$mydb->opencon();

$mydata=$mydb->searchProductSpecificUser($conobj, "orderlist",$proname,$_SESSION["sid"]);
if($mydata->num_rows > 0)
{
  echo '<table border="1" width="200px" align="center"';
    while($row=$mydata->fetch_assoc())
        {
        echo "<tr>";
       
        echo "<tr> <td>";
        echo "supplier Id &nbsp &nbsp &nbsp: ".$row["sid"]."<br>";
        echo "Product name  &nbsp &nbsp &nbsp: ".$row["proname"]."<br>";
        echo "Product catagory  &nbsp &nbsp &nbsp: ".$row["catagory"]."<br>";
        echo "Product quantity  &nbsp &nbsp &nbsp: ".$row["quantity"]."<br>";
        echo "Product price  &nbsp &nbsp &nbsp: ".$row["price"]."<br>";
        echo "<br></td></tr>";
        $flag=TRUE;
        }
        echo "</table>";
  
} else{
  echo "no data found";
}
     
  if($flag===TRUE && $count==1){
   echo "Product search successfull";
   }else{
    $srchErr ="please enter a valid information";
}
  }
 
?>
