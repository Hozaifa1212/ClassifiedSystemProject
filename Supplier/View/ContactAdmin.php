<?php require "../Control/ContactAdminCheck.php" ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../public/css/Supplierlogin.css">
</head>
<body id="body">
<div id="div"; class="contact-card">
  <div id="b"; class="contact-card2">
  <p>Send product related messages or any queries to admin!</p>
  </div>
  <font align="center" size="" face="Verdana">
  <h3>Contact Admin </h3><hr>
  <form action="" method="POST">
  <table border="0" width="800" align="center" cellspacing="2" cellpadding="2">
     
  <tr>
  <td>  <label for="name">Name:</label></td>
  <td>   <input type="text" name="name" placeholder="Name">
  
  <?php 
  echo $nameerr;
  ?>

  </td><br><br></tr>

  <tr><td> <label for="email">Email : </label></td>
  <td><input type="email" name="email" placeholder="Email">
   
  <?php 
  echo $emailerr;
  ?>
  </td><br><br> </tr>

  <tr><td> <label for="comment">Comment : </label></td>
  <td>
  <textarea name="comment" placeholder="Enter text here..."></textarea>
	 
  <?php
  echo $commenterr;
  ?></td><br></tr>
  
  <tr>
  <td><input type="submit" name="Submit" class="button submitbutton"><br>
     
  <?php
  echo $validMsg;
  echo $sentErr;
  ?>
  
  </td><br></tr>
  </table>
  </form>
</div>

  <table border="0" width="100%" align="center" cellspacing="2" cellpadding="2" >
  <tr><td></td>
  <td width="60%" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="../View/SupplierDashboard.php">Supplier Dashboard</a>&nbsp;
  <a href="SupplierAccount.php">Supplier Account</a>&nbsp;
  <a href="../View/logout.php">logout</a> &nbsp; 

  </td><td></td></tr>
  </table>

  
</body>
</html>