<?php
//session_start();
/*include ("../model/Cashiermodel.php");
$nameerr=$emailerr=$commenterr=$sentErr="";
$name=$email=$comment=$validMsg=$sentErr="";
$flag=0;
$filled=FALSE;
   /* if(!isset($_SESSION["cid"])){
  header("location: ../View/login.php");
};
*/
  /*if (($_SERVER["REQUEST_METHOD"] == "POST")&&(isset($_POST["submit"]))){
   if(empty($_POST["user"]) || (strlen($_POST["user"])<6))
    {
        $nameerr="* Enter a valid User Name";
    }
    else
    {  
        $name=$_POST["user"];
        $_SESSION["user"] =$_POST["user"];
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

  
*/
  /*   if( $flag==3){
        $mydb=new DB();
        $conobj=$mydb->opencon();
        $mydb->contactAdmin($name,$email,$comment,"cashiertoadmin",$conobj);
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

  */
 include ("../model/cashiermodel.php"); 
$name=$email=$comment="";
//$firstnameErr=$lastnameErr=$ageErr=$genderErr=$contNoErr=$emailErr=$cidErr=$passErr="";
$flag=0;
$filled=FALSE;

//session_start();
/*if(isset($_SESSION["cid"])){
  header("location: ../View/login.php");
};
*/
if(isset($_POST["submit"]))
{
    $name=$_POST["user"];
    $email=$_POST["email"];
    $comment=$_POST["comment"];
   
if(empty($name) || empty($email) || 
empty($comment)  )
{
    echo "please insert all field";
}
  /*if (($_SERVER["REQUEST_METHOD"] == "POST")&&(isset($_POST["Submit"]))){
  //check data from registration forms fields.
  //if any field is empty or less then show error

    if(empty($_POST["firstname"]) || (strlen($_POST["firstname"])<3))
    {
        $firstnameErr="* required! First Name must be grater then 4 char";
    }else
    {
      $fname = $_POST["firstname"];
      $_SESSION["firstname"] = $fname;
      $flag++;
    }
    echo "<br>";
 if(empty($_POST["lastname"]) || (strlen($_POST["lastname"])<3))
    {
        $lastnameErr="* Last Name must be grater than 4 char ";
    }
    else
    { 
      $lname=$_POST["lastname"];
       $_SESSION["lastname"] = $lname;
        $flag++;
    }
    echo "<br>";
     if(empty($_POST["age"]) || (($_POST["age"])<10))
    {
        $ageErr="* Age must be grater than 10";
    }
    else
    {
           $age=$_POST["age"];
          $_SESSION["age"] =  $age;
          $flag++;
    }
    echo "<br>";
   if(isset($_POST["gender"]))
    {
        $gen = $_POST['gender'];
        $_SESSION["gender"] = $gen;
        $flag++;
    }
    else
    { 
        $genderErr= "* Your have not selected any Gender";
 
    }
    echo "<br>";
      /*
          if(empty($_POST["cid"]) || (strlen($_POST["cid"])!=5))
 
    {
        $sidErr="* Supplier Id must be of 5 numbers";
    }
    else
    {
       $sid=$_POST["sid"];
      $_SESSION["cid"] = $_POST["cid"];
        $flag++;
    }

    echo "<br>";
      */ 
    /*
    if(empty($_POST["contNo"]) || (strlen($_POST["contNo"])!=11))
    {
        $contNoErr="* Enter valid contNo Number ";
    }
    else
    {
         $contNo=$_POST["contNo"];
        $_SESSION["contNo"] = $_POST['contNo'];
        $flag++;
    }
    echo "<br>";

    if(empty($_POST["email"]) || ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST["email"]))
    {
        $emailErr="* Enter valid Email Address ";
    }
    else
    {
        $email= $_POST['email'];
      $_SESSION["email"] = $_POST['email'];
        $flag++;
    }

    echo "<br>";
    if(empty($_POST["pass"]) ||(strlen($_POST["pass"])<5))
    {
        $passErr = "* please enter a valid password and this field is required";
  }
    else
    {   
         $pass=$_POST["pass"];
             $_SESSION["pass"] = $_POST['pass'];
         $flag++;
    }
      echo"<br>";
      
      if($filled===FALSE){  

               $filled=TRUE;
                //$flag++;
              }

*/
  else{
    // code...
  
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->contactAdmin($name,$email,$comment,"cashiertoadmin",$conobj);
    $mydb->closecon($conobj);
   
   }/*else{

    $regErr ="please enter valid product";
}*/
  }



  ?>
