<?php
//session_start();
include ("../Model/Stock_Model.php");
$pronameerr=$quanerr=$priceerr=$text=$caterr=$toterr="";
$proname=$quan=$price=$catagory="";
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

    
    
    
if($count==4)
{
      
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->InsertData($proname,$quan,$price,$catagory,"stockreport",$conobj);
    $mydb->closecon($conobj);
    $text="Successfully Added!";
    header("location: ../View/Success1.php?text='".$text."'");

       
  
}
else
$toterr= "* Data is not added successfully";

    
}

if(isset($_POST["back"]))
{
    header("location: ../View/ManagerPage.php");

}


?>