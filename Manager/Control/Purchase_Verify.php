<?php
//session_start();
include ("../Model/Purchase_Model.php");
$pronameerr=$quanerr=$priceerr=$text=$caterr=$toterr=$proiderr=$supiderr="";
$proname=$quan=$price=$catagory=$proid=$sid="";
$count=0;

if(isset($_POST["Add"]))
{

    $proname=$_REQUEST["proname"];

    if(empty($proname) || (strlen($proname))<3)
    { 
        $pronameerr="* Enter a valid Product Name";
    }
    else
    {
        $_SESSION["proname"] = $proname;
        $count++;
    }


    $quan=$_REQUEST["quan"];

    if($quan<1)
    {
        $quanerr="* Enter a valid Quantity Number ";
    }
    else
    {
        $_SESSION["quan"] = $quan;
        $count++;
    }

    $proid=$_REQUEST["proid"];

    if(strlen($proid)<3)
    {
        $proiderr="* Enter a valid Product ID ";
    }
    else
    {
        $_SESSION["proid"] = $proid;
        $count++;
    }

    $sid=$_REQUEST["sid"];

    if(strlen($sid)<3)
    {
        $supiderr="* Enter valid Supplier ID ";
    }
    else
    {
        $_SESSION["sid"] = $_POST['sid'];
        $count++;
    }

    $price=$_REQUEST["price"];

    if($price<1)
    {
        $priceerr="* Enter valid Price of the product ";
    }
    else
    {
        $_SESSION["price"] = $price;
        $count++;
    }

    $catagory=$_REQUEST["catagory"];
    if(empty($catagory) || (strlen($catagory))<3)
    {
        $caterr="* Enter a valid Catagory Name";
    }
    else
    {
        $_SESSION["catagory"] = $catagory;
        $count++;
    }

    
    
    
if($count==6)
{
      
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->InsertData($proname,$quan,$price,$catagory,$proid,$sid,"purchaserecord",$conobj);
    $mydb->closecon($conobj);
    $text="Successfully Purchased!";
    header("location: ../View/Success1.php?text=".$text);
       
  
}
else
$toterr= "* Data is not added successfully";

    
}

if(isset($_POST["back"]))
{
    header("location: ../View/ManagerPage.php");

}


?>