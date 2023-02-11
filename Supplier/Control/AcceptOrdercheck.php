<?php
include ("../model/SupplierModel.php");
$ordiderr=$pronameerr=$quantityerr=$priceerr=$catagoryerr=$toterr="";
$ordid=$sid=$prodname=$catagory=$quantity=$price="";
$flag=0;$filled=FALSE;
 //you can submit data if want to accept (or want to add ) any order
session_start();
if(!isset($_SESSION["sid"])){
  header("location: ../View/login.php");
};
 if (($_SERVER["REQUEST_METHOD"] == "POST")&&(isset($_POST["Order"]))){

     $sid=$_SESSION["sid"];
    if(empty($_POST["prodname"]) || (strlen($_POST["prodname"])<3))
    {
        $pronameerr="* Enter a valid Product Name";
    }
    else
    {
        $prodname=$_POST["prodname"];
        $_SESSION["prodname"] = $prodname;
        $flag++;
    }


    echo "<br>";

       
    if(empty($_POST["catagory"]) || (strlen($_POST["catagory"])<3))
    {
        $catagoryerr="* Enter a valid Catagory Name";
    }
    else
    {
        $catagory=$_POST["catagory"];
        $_SESSION["catagory"] =$_POST["catagory"];
        $flag++;
    }
   

    if(empty($_POST["quantity"]) || (strlen($_POST["quantity"])<1))

    {
        $quantityerr="* Enter a valid Quantity Number ";
    }
    else
    {
         $quan=$_POST["quantity"];
        $_SESSION["quantity"] =$_POST["quantity"];
        $flag++;
    }

    echo "<br>";

    if (empty($_POST["price"]) || (strlen($_POST["price"])<2))
        
    {
        $priceerr="* Enter valid Price of the product ";
    }
    else
    {
         $price=$_POST["price"];
        $_SESSION["price"] =$_POST["price"];
        $flag++;
    }
    

    if($flag==4)
    {
        $mydb=new DB();
        $conobj=$mydb->opencon();
        $mydb->acceptOrder($sid,$prodname,$catagory,$quan,$price,"orderlist",$conobj);
        $mydb->closecon($conobj);
        $filled=TRUE;
    }
     if($filled=TRUE && $flag==4) {
    
        echo "message successfully sent";
      }else  {
    $toterr= "Not Ordered successfully";
    }
    
}


?>