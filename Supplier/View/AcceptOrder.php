<?php
require "../Control/AcceptOrdercheck.php";
?>

<!DOCTYPE html>
<html>
<head>
</head>
<link rel="stylesheet" type="text/css" href="../public/css/Supplierlogin.css">
<body id="body">
  <font align="center"  size="4" face="Verdana">
  <h2 >Accept Order</h2><hr>
  </font>
  <form action="" method="POST" >
  <table border="0" width="700px" align="center" cellspacing="2" cellpadding="2" >

<?php 
/* 

*/
?>
    <tr height="10px" >
    <td>Product Name:
    <br>
    <input type="text" name="prodname">
          
    <?php
    echo $pronameerr;
    ?>
    </td></tr>  
       
    <tr height="10px" >
    <td>Catagory :<br><input type="text" name="catagory" maxlength="10" size="20">
    
    <?php
    echo $catagoryerr;
    ?>
    </td></tr>
         
    <tr height="10px" >
    <td>Quantity:<br>
    <input type="number" name="quantity" maxlength="10" size="20">
           
    <?php
    echo $quantityerr;
    ?>
    </td></tr>

    <tr height="10px" >
    <td>Price:<br>
    <input type="number" name="price" maxlength="15" size="20" >
            
    <?php
    echo $priceerr;
    ?>
    </td></tr>
       
    <tr height="10px" >
    <td>   
    <input type="submit" name="Order" value="Order" class="button submitbutton">
    <input type="reset" value="Reset" class="button resetbutton">
         
    <?php
    echo $toterr;
    ?>
    </td></tr>
        
  </table>
  </form>

  <table border="0" width="100%" align="center" cellspacing="2" cellpadding="2" >
  <tr><td></td>
  <td width="40%" >
  <a href="../View/SupplierDashboard.php">Supplier Dashboard</a>&nbsp;
  <a href="SupplierAccount.php">Supplier Account</a>&nbsp;
  <a href="../View/logout.php">logout</a> &nbsp; 
  </td><td></td></tr>

  </table>

  
</body>
</html>