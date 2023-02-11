



<?php
session_start();
$name=$email=$comment=$cid="";
//$idErr=$passErr=$loginErr="";
$namerr=$emailerr=$commentErr=""; 
$cookie_name="loginCheck"; 
$cookie_value="1";  
   
    if(!isset($_SESSION["cid"])){

  header("location: ../View/login.php");

}; 
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
 ?>
 
 <?php
if (!isset($_COOKIE['count'])) { 
  echo "Welcome! Now you are in chashier page today."; 
  $cookie = 1;
  setcookie("count", $cookie);
}else{
  $cookie = ++$_COOKIE['count'];
  setcookie("count", $cookie); 
  echo "welcome ! You have viewed this page today ".$_COOKIE['count']." times.";
}; 
 
 $sid= $_SESSION["cid"];

?>


  