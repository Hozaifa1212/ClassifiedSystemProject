<?php
session_start();
$name=$email=$comment=$sid="";
//$idErr=$passErr=$loginErr="";
$namerr=$emailerr=$commentErr=""; 
$cookie_name="loginCheck"; 
$cookie_value="1";  
   
    if(!isset($_SESSION["sid"])){

  header("location: ../View/login.php");

}; 
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
 ?>
 
 <?php
if (!isset($_COOKIE['count'])) { 
  echo "Welcome! This is the first time you have viewed this page today."; 
  $cookie = 1;
  setcookie("count", $cookie);
}else{
  $cookie = ++$_COOKIE['count'];
  setcookie("count", $cookie); 
  echo "You have viewed this page today ".$_COOKIE['count']." times.";
}; 
 
$sid= $_SESSION["sid"];

?>
