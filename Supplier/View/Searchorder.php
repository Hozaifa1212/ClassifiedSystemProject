<?php require "../Control/ordersearch.php" ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<link rel="stylesheet" type="text/css" href="../public/css/Supplierlogin.css">
</head>
<body id="body">
<div class="contact-card">
  <div id="b"; class="contact-card2">
  <p>search the order you have added to your cart.</p>
  </div>
	<font align="center"  size="5" face="Verdana">
  <h3>Search Order </h3><hr>
  <form action="" method="POST">
  <table border="0" width="500" align="center" cellspacing="2" cellpadding="2" >
  <tr height="10px">
  <td>
 	<font align="center" size="5" face="Verdana"><label for="proname" >Product Name:</label> <input type="text" name="proname" placeholder="product name"><br>
  
  <?php 
  echo $idErr;
  ?>
  </font><br></td></tr>

  <tr height="10px">
	<td><font align="center" size="5" face="Verdana">&nbsp;&nbsp;&nbsp;
  <input type="submit" name="Search" class="button submitbutton">&nbsp;
  <input type="submit" name="Reset" value="Reset" class="button resetbutton"><br>
  <?php 
  echo $srchErr; 
  ?>
  </font><br></td></tr>

  </table>
  </form>
</div>
  <table border="0" width="100%" align="center" cellspacing="2" cellpadding="2" >
 	<tr><td></td>
 	<td width="40%" >
  <a href="../View/SupplierDashboard.php">Supplier Dashboard</a>&nbsp;
  <a href="ContactAdmin.php">Contact Admin </a>&nbsp;
  <a href="../View/logout.php">logout</a> &nbsp; 

  </td><td></td></tr>
  </table>

  
</body>
</html>