<?php
include("../Model/Manager_Model.php");
//include("../View/Success.php");


$fnameerr=$lnameerr=$ageerr=$generr=$experr=$eduerr=$preerr=$pererr=$conerr=$emerr=$passerr=$conpasserr="";
$fname=$lname=$age=$gen=$cont=$preadd=$peradd=$exp=$edu=$email=$mid=$pass=$conpass=$valid="";
$flag=0;
$count2=0;

if(isset($_POST["submit"]))
{
  
    $fname=$_REQUEST["fname"];

    if(empty($fname) || !preg_match ("/^[a-zA-z]*$/", $fname) )
    {
        $fnameerr="* Enter a valid First Name";
    }
    else
    {
        $flag++;
    }


    $lname=$_REQUEST["lname"];

    if(empty($lname) || !preg_match ("/^[a-zA-z]*$/", $lname) )
    {
        $lnameerr="* Enter a valid Last Name ";
    }
    else
    {
        $flag++;
    }


    $age=$_REQUEST["age"];

    if(empty($age) || $age<15)
    {
        $ageerr="* Enter valid age ";
    }
    else
    {
        $flag++;
    }
    
   
    if(isset($_POST["gen"]))
    {
        $gen=$_POST['gen'];

        $flag++;
    }
    else
    { 
        $generr= "* Your have not selected any Gender";
 
    }


    $edu=$_REQUEST["edu"];

    if(empty($edu) )
    {
        $eduerr="* Enter valid Education Level ";
    }
    else
    {
        $flag++;
    }


    $exp=$_REQUEST["exp"];

    if(empty($exp) || strlen($exp)<1)
    {
        $experr="* Enter valid Number ";
    }
    else
    {
        $flag++;
    }


    $cont=$_REQUEST["cont"];

    if(empty($cont) || strlen($cont)!=11)
    {
        $conerr="* Enter valid Contact Number ";
    }
    else
    {
        $flag++;
    }

    $preadd=$_REQUEST["preadd"];

    if(empty($preadd))
    {
        $preerr="* Enter valid Present Address ";
    }
    else
    {
        $flag++;
    }


    $peradd=$_REQUEST["peradd"];

    if(empty($peradd) || strlen($peradd)<5)
    {
        $pererr="* Enter valid Permanent address ";
    }
    else
    {
        $flag++;
    }


    $email=$_REQUEST["email"];

    if(empty($email) || ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
        $emerr="* Enter valid Email Address ";
    }
    else
    {
        $flag++;
    }


    $pass=$_REQUEST["pass"];
    $conpass=$_REQUEST["conpass"];

    if(empty($pass) || !preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $pass))
    {
        $passerr="* Enter valid Password ";
    }
    else
    {
        if($_POST['pass']==$_POST['conpass'])
        {
        $flag++;
        }
        else
        {
            $conpasserr="* Renter valid Password ";
        }

    }

if($flag==11)
{
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->InsertData($fname,$lname,$age,$gen,$edu,$exp,$cont,$email,$pass,$preadd,$peradd,"managerinfo",$conobj);

$mydata=$mydb->SearchEmail("managerinfo",$conobj,$email);
if($mydata->num_rows > 0)
{
    while($row=$mydata->fetch_assoc())
    {
 
        $valid=$row["mid"];
        
     
    }

}
    $mydb->closecon($conobj);
    header("location: ../View/Success.php?valid='".$valid."'");

}

}


?>