<?php

include ("../Model/Manager_Model.php");
$fname=$lname=$age=$gen=$exp=$cont=$edu=$pass=$email=$preadd=$peradd="";


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
        $pass=$row["pass"];
        $preadd=$row["preadd"];
        $peradd=$row["peradd"];
     
    }

}


if(isset($_POST["back"]))
{
    header("location: ../View/ManagerPage.php");

}



    ?>