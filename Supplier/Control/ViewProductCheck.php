<?php
include ("../model/SupplierModel.php");
$orderid="";
$proname=$catagory=$quantity=$price=$sid="";

session_start();

if(!isset($_SESSION["sid"])){

  header("location: ../View/login.php");
};

if(isset($_POST["fetch"])){
$mydb=new DB();
$conobj=$mydb->opencon();

$mydata=$mydb->viewProduct($conobj, "orders");
if($mydata->num_rows > 0)
{ echo '<table border="1" width="200px" align="center"';
    while($row=$mydata->fetch_assoc())
        {
        echo "<tr>";
       
        echo "<tr> <td>";
        echo "Product Id &nbsp &nbsp &nbsp: ".$row["proid"]."<br>";
        echo "Product name  &nbsp &nbsp &nbsp: ".$row["proname"]."<br>";
        echo "Product catagory  &nbsp &nbsp &nbsp: ".$row["catagory"]."<br>";
        echo "Product quantity  &nbsp &nbsp &nbsp: ".$row["quantity"]."<br>";
        echo "Product price  &nbsp &nbsp &nbsp: ".$row["price"]."<br>";
        echo "<br></td></tr>";  }
        echo "</table>";
        }
else{
    echo "no data found";
}
}
/*

   echo "<div class='card-container' align='center'>";
       echo "<div class='card'>";   

while($row=$mydata->fetch_assoc())
    {
    echo $row["sid"]."<br>";
        echo $row["proname"]."<br>";
        echo $row["catagory"]."<br>";
        echo $row["quantity"]."<br>";
        echo $row["price"]."<br>";
         }
         echo "</div>";
         echo "</div>";
        }
else{
    echo "no data found";
}
}
*/
    /*
    if(isset($_POST["search"]))
{
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydata=$mydb->searchProduct($conobj, "orderlist",$_POST["searchdata"]);
    if($mydata->num_rows > 0){
    echo "<table>";
while($row=$mydata->fetch_assoc())
    {
    echo "<tr>";
   
    echo "<td>".$row["sid"]."</td>";
    echo "<td>".$row["proname"]."</td>";
    echo "<td>".$row["catagory"]."</td>";
    echo "<td>".$row["quantity"]."</td>";
    echo "<td>".$row["price"]."</td>";
    echo "</tr>";}
    echo "</table>";
    }
    else{
        echo "no data found";
    }
}
    */

    
    if(isset($_POST["search"]))
{
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydata=$mydb->searchProductx($conobj, "orders",$_POST["searchdata"]);
    if($mydata->num_rows > 0){

while($row=$mydata->fetch_assoc())
    {
        $sid=$_SESSION["sid"];
        $proid= $row["proid"];
        $proname= $row["proname"];
        $catagory= $row["catagory"];
        $quantity= $row["quantity"];
        $price= $row["price"];
        
      }
    }
    else{
        echo "no data found";
    }
}
if(isset($_POST["AddToCart"]))
{
$mydb=new DB();
 $conobj=$mydb->opencon();
 $mydb->AddToCart("orderlist",$_SESSION["sid"],$_POST["proname"],$_POST["catagory"],$_POST["quantity"],$_POST["price"],$conobj);
}
    

?>
