<?php require "../Control/logincheck.php" ?>
<!DOCTYPE html>
<html lang="en-US">

<head>
<link rel="stylesheet" type="text/css" href="../public/css/Supplierlogin.css">
</head>

<body id="body">
	<font align="center"  size="5" face="Verdana">

<div id="div"; class="card">
  <h2>Login form </h2><hr><br>
     
  <form action="" method="POST">
  <table border="0" width="500" align="center" cellspacing="5" cellpadding="10" >
  <tr height="10px">
  <td><font align="center" size="5" face="Verdana"><label for="sid" >&nbsp;&nbsp;Supplier Id &nbsp;&nbsp; :</label>  &nbsp;<input type="text" name="sid" placeholder="Supplier Id">
  
  <?php 
  echo $idErr;
  ?>

  </font>
  <br></td></tr>

  <tr height="10px"><td><font align="center" size="5" face="Verdana"> <label for="pass"> &nbsp;Password   &nbsp;&nbsp;&nbsp;   :</label>&nbsp;&nbsp;<input type="password"  name="pass" placeholder="Password"><br>
  
  <?php 
  echo $passErr; ?>
  </font><br></td>
  
  </tr>
  <tr height="10px">
	<td><font align="center" size="5" face="Verdana">&nbsp;&nbsp;&nbsp;<input type="submit" name="Login" class="button submitbutton">&nbsp;&nbsp;&nbsp;<input type="Reset" value="Reset" class="button resetbutton">
  s
  <?php 
  echo $loginErr; ?>
  </font><br></td>
  
  </tr>
  <tr height="10px">
  <td><font align="center" size="5" face="Verdana"><a href="../View/SupplierRegistration.php">Register Now!</a>  <br>  <br>
  </font></td>
  
  </tr>
  </table>
  </form>
</div>


</body>
</html>