<?php

include ("../model/SupplierModel.php");
$orderid="";

session_start();

if(!isset($_SESSION["sid"])){

  header("location: ../View/login.php");
};
    $mydb=new DB();
 $conobj=$mydb->opencon();
 $mydata=$mydb->checkOrder($conobj,"orderlist",$_SESSION["sid"]);
 if($mydata->num_rows > 0){
   echo '<table border="1" width="800px" align="center"';
while($row=$mydata->fetch_assoc())
  {
  echo "<tr>";
 
  echo "<td>"."sid &nbsp &nbsp &nbsp :".$row["sid"]."</td>";
  echo "<td>"."Product Name &nbsp &nbsp &nbsp :".$row["proname"]."</td>";
  echo "<td>"."Product Catagory &nbsp &nbsp &nbsp :".$row["catagory"]."</td>";
  echo "<td>"."Product Quantity &nbsp &nbsp &nbsp :".$row["quantity"]."</td>";
  echo "<td>"."Product Prict &nbsp &nbsp &nbsp :".$row["price"]."</td>";
  echo "</tr>";}
  echo "</table>";
  }
  else{
      echo "no data found";
  }
?>
