<?php
include ("../Model/Order_Model.php");
$pronameerr=$supnameerr=$text=$quanerr=$priceerr=$caterr=$proiderr=$supiderr=$redateerr="";
$proname=$proname=$quan=$price=$caterr=$redate=$toterr="";
$count=0;

if(isset($_POST["Add"]))
{

    $proname=$_REQUEST["proname"];

    if(empty($proname) || (strlen($proname)<3))
    {
        $pronameerr="* Enter a valid Product Name";
    }
    else
    {
        $_SESSION["proname"] = $proname;
        $count++;
    }

 
    $supname=$_REQUEST["supname"];  
    if(empty($supname) || (strlen($supname)<3))
    {
        $supnameerr="* Enter a valid Supplier Name";
    }
    else
    {
        $_SESSION["supname"] = $supname;
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
    if(empty($catagory) || (strlen($catagory)<3))
    {
        $caterr="* Enter a valid Catagory Name";
    }
    else
    {
        $_SESSION["catagory"] = $catagory;
        $count++;
    }

    $redate=$_REQUEST["redate"];
    if(empty($redate))
    {
        $redate="* Enter a valid Date";
    }
    else
    {
        $_SESSION["redate"] = $redate;
        $count++;
    }

    $proid=$_REQUEST["proid"];

    if(strlen($proid)<3)
    {
        $proiderr="* Enter valid Product ID ";
    }
    else
    {
        $_SESSION["proid"] = $_POST['proid'];
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

    if($count==8)
    {
        $mydb=new DB();
        $conobj=$mydb->opencon();

        $mydb->InsertData($proname,$proid,$supname,$sid,$quan,$price,$catagory,$redate,"ordernow",$conobj);
        
    $mydb->closecon($conobj);
    $text="Successfully Ordered!";
    header("location: ../View/Success1.php?text='".$text."'");

    }
    else
    $toterr= "* Not Ordered successfully";

}
    
if(isset($_POST["back"]))
{
    header("location: ../View/ManagerPage.php");

}


?>