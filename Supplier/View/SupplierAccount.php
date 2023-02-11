<?php require "../Control/SupplierAccCheck.php" ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<link rel="stylesheet" type="text/css" href="../public/css/Supplierlogin.css">
</head>
<body id="body">
<div id="div"; class="reg-card">
    <h3>Supplier Information </h3><hr>
    <form action="" method="post">
    Suppliers Id&nbsp;&nbsp;:
    <input name="sid" value="
    <?php 
    echo $sid; 
    ?>"><br><br>
    First name &nbsp;&nbsp;&nbsp;:
    <input name="fname" value="
    <?php 
    echo $fname; 
    ?>"><br><br>
    Last name&nbsp;&nbsp;&nbsp;&nbsp;:
    <input name="lname" value="
    <?php 
    echo $lname; 
    ?>"><br><br>
    Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
    <input name="age" value="
    <?php 
    echo $age; 
    ?>"><br><br>
    Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
    <input name="gen" value="
    <?php 
    echo $gen; 
    ?>"><br><br>
    Contact No&nbsp;:
    <input name="contNo" value="
    <?php 
    echo $contNo; 
    ?>"><br><br>
    Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 
    <input name="email" value="
    <?php 
    echo $email; 
    ?>"><br><br>
    password&nbsp;&nbsp;&nbsp;&nbsp;: 
    <input name="pass" value="
    <?php 
    echo $pass; 
    ?>"><br><br>
    <input type="submit" name="UpdateInfo" value="Update-Info" class="button updatebutton">
    <input type="submit" name="ViewInfo" value="View-Info" class="button submitbutton">
    </form><br><br>

    <table border="0" width="100%" align="center" cellspacing="2" cellpadding="2"  >
 	<tr><td></td>
 	<td width="60%" >
    <a href="../View/SupplierDashboard.php">Supplier Dashboard</a>&nbsp;
    <a href="ContactAdmin.php">Contact Admin </a>&nbsp;
    <a href="../View/logout.php">logout</a>&nbsp;  
    </td><td></td></tr>
    </table>

</div>


  
</body>
</html>