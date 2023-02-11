<?php
include ("../model/Cashiermodel.php");
if($_POST["proid"]=="")
{
    echo "empty input";
}
else{
    

    $mydb=new DB();
    $conobj=$mydb->opencon();
    
    $mydata=$mydb->searchstk($conobj, "stockreport",$_POST["proid"]);
    
    if($mydata->num_rows > 0)
    {

    
        while($row=$mydata->fetch_assoc())
        {
     
         echo.$row["proname"];
         echo.$row["catagory"];
         echo.$row["quantity"];
         echo.$row["price"];
         echo.$row["proid"];
           
        }


    }
    else{
        echo "no data found";
    }
    

}


?>