
<?php 

 include ("../model/Cashiermodel.php");
/*session_start();

if(!isset($_SESSION["cid"])){
  header("location: ../View/login.php");
};
$mydb=new DB();
 $conobj=$mydb->opencon();
 $mydata=$mydb->viewAccInfo($conobj,"cashierinfo",$_SESSION["cid"]);

if($mydata->num_rows > 0){
  echo "<table>";
  while($row=$mydata->fetch_assoc())
      {
        
      echo "<tr>";
      echo "<td>".$row["cid"]."</td>";
      echo "<td>".$row["fname"]."</td>";
      echo "<td>".$row["lname"]."</td>";
      echo "<td>".$row["age"]."</td>";
      echo "<td>".$row["gen"]."</td>";
      echo "<td>".$row["contNo"]."</td>";
      echo "<td>".$row["email"]."</td>";
      echo "<td>".$row["pass"]."</td>";
      echo "</tr>";}
      echo "</table>";

      }
      else{
        echo "no data found";
    }     
  
 

*/
    /*  $cid="";

  if(isset($_POST["Search"]))
    {
      $cid=$_POST["cid"];
      if(empty($cid) || (strlen($cid))<3)
      {
          $err="* Enter a valid Manager ID";
      }
      else
      {
              
  $mydb=new DB();
  $conobj=$mydb->opencon();
  $mydata=$mydb->SearchID("cashierinfo",$conobj,$cid);
  if($mydata->num_rows> 0)
  {
      
      while($row=$mydata->fetch_assoc())
      {
         "<tr>";
         echo "<td>".$row["firstname"]."</td>";
         echo"<td>".$row["lastname"]."</td>";
         echo"<td>".$row["age"]."</td>";
         echo"<td>".$row["gen"]."</td>";
         echo"<td>".$row["contNo"]."</td>";
         echo"<td>".$row["email"]."</td>";
         echo"<td>".$row["cid"]."</td>";
         echo"<td>".$row["pass"]."</td>";
         echo "</tr>";
         echo "</table>";
           
      } 

  }
  else
  $err="Wrong Input! Data Not Found";
  }
 }
*/

       

 





/*
        if(isset($_POST['submit'])){

      
         

      $old_data = file_get_contents("../file/cashir.json");

      $array_data = json_decode($old_data,true);

     
     foreach ( $array_data as $value) {
        
       if($value['cid'] == $_POST['cid']){


          ?>

      

          <strong> Name : <?php echo $value['name']; ?> </strong><br><br>

           <strong> Email : <?php echo $value['email']; ?> </strong><br><br>

        <strong> Age : <?php echo $value['age']; ?> </strong><br><br>

         <strong> Phone Number : <?php echo $value['phoneNumber']; ?> </strong><br><br>

          <strong> Gender : <?php echo $value['gender']; ?> </strong><br><br>

           <strong> language : <?php echo $value['language']; ?> </strong><br><br>

            <strong> position : <?php echo $value['position']; ?> </strong><br><br>


          <?php



       }else{






       }

     }

    }

        */
    if(isset($_POST["Search"]))
{


    $mydb=new DB();
    $conobj=$mydb->opencon();
    
    $mydata=$mydb->searchID($conobj, "cashierinfo",$_POST["cid"]);
    if($mydata->num_rows > 0)
    {

    
        while($row=$mydata->fetch_assoc())
        {
          echo '<br><table id="table3" border="0"  align="left" cellspacing="2" cellpadding="10" >';
     
         echo "<tr><td ><strong >First name ID   :".$row["fname"]."</strong></td></tr><br><br>";
         echo"<tr><td><strong>last name   :".$row["lname"]."</strong></td></tr>";
         echo"<tr><td><strong>age".$row["age"]."</strong></td></tr>";
         echo"<tr><td><strong>Gender".$row["gen"]."</strong></td></tr>";
         echo"<tr><td><strong>Phone no".$row["contNo"]."</strong></td></tr>";
         echo"<tr><td><strong>Email".$row["email"]."</strong></td></tr>";
         echo"<tr><td><strong>Id".$row["cid"]."</strong></td></tr>";
         echo"<tr><td><strong>Password".$row["pass"]."</strong></td></tr>";
         echo "</tr>";
         echo "</table>";
        }
    

    }
    else{
        echo "no data found";
    }
    


}



      ?>
      