<?php

$nameerr=$emerr=$comerr="";
$name=$email=$comment="";
$flag=0;

if(isset($_POST["submit"]))
{

    $name=$_REQUEST["name"];

    if(empty($name) || (strlen($name)<3))
    {
        $nameerr="* Enter a valid User Name";
    }
    else
    {
        $_SESSION["name"] = $name;
        $flag++;
    }

    echo "<br>";

    $email=$_REQUEST["email"];

    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
        $emerr="* Enter a valid Email Address ";
    }
    else
    {
        $_SESSION["email"] = $_POST['email'];
        $flag++;
    }

    echo "<br>";

    $comment=$_REQUEST["comment"];

    if(strlen($comment)<10)
    {
        $comerr="* Enter at least 10 character in Comment ";
    }
    else
    {
        $_SESSION["comment"] = $_POST['comment'];
        $flag++;
    }

    if($flag==3)
    {
        
	   $formdata = array(
        'name'=> $_SESSION["name"],
        'email'=> $_SESSION["email"],
        'comment'=>$_SESSION["comment"]
        
     );

     
      $existingdata = file_get_contents('../File/ManagerToAdmin.json');
      $tempJSONdata = json_decode($existingdata);
      $tempJSONdata[]=$formdata;
      //Convert updated array to JSON
      $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
      
      //write json data into data.json file
      if(file_put_contents("../File/ManagerToAdmin.json", $jsondata)) {
          header("Location: ../View/ManagerPage.php"); 
       }
    }
    

    
}


?>