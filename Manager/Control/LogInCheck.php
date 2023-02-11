<?php
include ("../Model/Manager_Model.php");

session_start();




$mid=$pass=$name=$text="";
$loginerr=$passerr=$miderr="";
$count=$flag=0;




if(isset( $_SESSION["mid"]))
{
     header("location: ../View/ManagerPage.php");
}

if(isset($_POST["login"]))
{

    $mid=$_POST["mid"];
    
    if(empty($mid) || strlen($mid)<4)
    {
        $miderr="* Enter a valid Manager Id";
    }
    else
    {

        $miderr==" ";
        $count++;

    }

    echo "<br>";

    $pass=$_POST["pass"];

    if(empty($pass) || !preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $pass))
    {
        $passerr="* Enter a valid Password ";
    }
    else
    {
        
        $passerr=" ";
        $count++;
    }
  
if($count==2)
{
    
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydata=$mydb->SearchID("managerinfo",$conobj,$mid,$pass);
    if($mydata->num_rows > 0)
    {
        $flag=1;
        while($row=$mydata->fetch_assoc())
        {
     
           $fname=$row["fname"];
            $lname=$row["lname"];
         
        }
    
    }


    if($flag==1){
        $loginerr=" ";
        if(!empty($_POST["remember"])) {
            setcookie ("managerid",$_POST["mid"],time()+ 3600);
            setcookie ("password",$_POST["pass"],time()+ 3600);
            echo "Cookies Set Successfuly";
        } 

        $_SESSION["mid"] = $mid;
       $_SESSION["lname"] = $lname;
       $_SESSION["fname"] = $fname;
        
       $text="Successfully Logged In!";
       header("location: ../View/Success1.php?text='".$text."'");
    }
    else
    {
        
        $loginerr="Invalid Email address or Password! Log In Failed.";

    }
}
    
   

    
}


?>