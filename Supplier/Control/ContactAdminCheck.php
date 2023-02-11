<?php
session_start();
include ("../model/SupplierModel.php");
$nameerr=$emailerr=$commenterr=$sentErr="";
$name=$email=$comment=$validMsg=$sentErr="";
$flag=0;
$filled=FALSE;
    if(!isset($_SESSION["sid"])){
  header("location: ../View/login.php");
};

  if (($_SERVER["REQUEST_METHOD"] == "POST")&&(isset($_POST["Submit"]))){
	 if(empty($_POST["name"]) || (strlen($_POST["name"])<5))
    {
        $nameerr="* Enter a valid User Name";
    }
    else
    {  
    	  $name=$_POST["name"];
        $_SESSION["name"] =$_POST["name"];
        $flag++;
    }

    echo "<br>";

  

    if(empty($_POST["email"]) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST["email"]))
    {
        $emailerr="* Enter a valid Email Address ";
    }
    else
    {      
    	$email=$_POST["email"];
        $_SESSION["email"] = $_POST['email'];
        $flag++;
    }

   echo "<br>";
    if(strlen($_POST["comment"])<10)
    {
        $commenterr="* Enter in details in Comment ";
    }
    else
    {     
    	$comment=$_POST["comment"];
        $_SESSION["comment"] = $_POST['comment'];
        $flag++;
    }

  

     if( $flag==3){
        $mydb=new DB();
        $conobj=$mydb->opencon();
        $mydb->contactAdmin($name,$email,$comment,"suppliertoadmin",$conobj);
        $mydb->closecon($conobj);
    }
 if($flag==3){
         $validMsg="your message is sent";
         // header("Location: ../View/SupplierAccount.php"); 
              }else{

    $sentErr ="please enter valid informations with a unique email";
}
    }

?>