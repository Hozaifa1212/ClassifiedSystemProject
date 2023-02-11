<?php
include ("../Model/Manager_Model.php");
$fname=$lname=$age=$gen=$exp=$cont=$text=$edu=$pass=$email=$preadd=$peradd="";


$mydb=new DB();
$conobj=$mydb->opencon();
$mydata=$mydb->SearchData("managerinfo",$conobj,$_SESSION["mid"]);
if($mydata->num_rows > 0)
{
    while($row=$mydata->fetch_assoc())
    {
 
       $mid=$row["mid"];
        $fname=$row["fname"];
        $lname=$row["lname"];
        $age=$row["age"];
        $gen=$row["gen"];
        $edu=$row["edu"];
        $exp=$row["exp"];
        $cont=$row["contNo"];
        $email=$row["email"];
        $preadd=$row["preadd"];
        $peradd=$row["peradd"];
     
    }
    

}


if(isset($_POST["update"]))
{
    

    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->UpdateData($_SESSION["mid"],$_POST["fname"],$_POST["lname"],$_POST["age"],$_POST["gen"],$_POST["edu"],$_POST["exp"],$_POST["cont"],$_POST["email"],$_POST["preadd"],$_POST["peradd"],"managerinfo",$conobj);
    $mydata=$mydb->SearchData("managerinfo",$conobj,$_SESSION["mid"]);
if($mydata->num_rows > 0)
{
    while($row=$mydata->fetch_assoc())
    {
 
       $mid=$row["mid"];
        $fname=$row["fname"];
        $lname=$row["lname"];
        $age=$row["age"];
        $gen=$row["gen"];
        $edu=$row["edu"];
        $exp=$row["exp"];
        $cont=$row["contNo"];
        $email=$row["email"];
        $preadd=$row["preadd"];
        $peradd=$row["peradd"];
     
    }
}
$text="Successfully Updated!";
header("location: ../View/Success1.php?text='".$text."'");

}

if(isset($_POST["back"]))
{
    header("location: ../View/ManagerPage.php");

}



    ?>