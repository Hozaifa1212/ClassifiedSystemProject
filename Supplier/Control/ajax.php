<?php
include ("../model/SupplierModel.php");
if($_POST["proname"]=="")
{
    echo "empty input";
}
else{
    
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydata=$mydb->searchProductx($conobj,"orders",$_POST["proname"]);
    if($mydata->num_rows > 0)
    {
      while($row=$mydata->fetch_assoc())
        {
          echo $row["proname"];
           }
    }
    else{
        echo "no data found";
    }
  }


?>