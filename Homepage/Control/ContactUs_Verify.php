<?php
//session_start();
$nameerr=$emerr=$queserr=$dataerr="";
$name=$email=$ques="";
$flag=0;

if(isset($_POST["submit"]))
{

    $name=$_REQUEST["name"];

    if(empty($name) || (strlen($name)<3))
    {
        $nameerr="* Enter a valid First Name";
    }
    else
    {
        $_SESSION["name"] = $_POST['name'];
        $flag++;
    }

    echo "<br>";


    $email=$_REQUEST["email"];

    if(empty($email) || ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
    {
        $emerr="* Enter valid Email Address ";
    }
    else
    {
        $_SESSION["email"] = $_POST['email'];
        $flag++;
    }

    echo "<br>";

    $ques=$_REQUEST["ques"];

    if(strlen($ques)<10)
    {
        $queserr="* Enter at least 10 character in Question ";
    }
    else
    {
        $_SESSION["ques"] = $_POST['ques'];
        $flag++;
    }


if($flag==3)
{
    $formdata = array(
        'name'=> $_SESSION["name"],
        'email'=> $_SESSION["email"],
        'ques'=>$_SESSION["ques"],
        
     );

      $existingdata = file_get_contents('../File/ContactUs.json');
      $tempJSONdata = json_decode($existingdata);
      $tempJSONdata[]=$formdata;
      //Convert updated array to JSON
      $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
      
      //write json data into data.json file
      if(file_put_contents("../File/ContactUs.json", $jsondata)) {
          $dataerr="Got your feedback! We will contact you shortly!!";
          
       }
       else{
        $dataerr="Something error!!Please try again!!";
       }
}

}


?>