<?php require "../Control/SupplierDashboardCheck.php" ?>

<!DOCTYPE html>
<html lang="en-US">
<head>
   <link rel="stylesheet" type="text/css" href="../public/css/SupplierDashboard.css">
</head>
<body >
<div  class="container">
  <div class="navigation">
  <ul><li>
  <a href="#">
  <span class="title">Supplier Dashboard</span></a>
  </li><hr>
  <li>
  <a href="../View/SupplierAccount.php">
  <span class="about textNav">Supplier Account</span></a>
  </li>
  <li>
  <a href="../View/ContactAdmin.php">
  <span class="us">Contact Admin</span></a>   
  </li>
  <li>
  <a href="../View/ViewProduct.php">
  <span class="us">View Product</span></a>   
  </li>
  <li>
  <a href="../View/AcceptOrder.php">
  <span class="us">Accept Order</span></a>   
  </li>
  <li>
  <a href="../View/Checkorder.php">
  <span class="us">Check Order</span></a>   
  </li>
  <li>
  <a href="../View/logout.php">
  <span class="us">logout</span></a>   
  </li></ul>
     
  </div>

</div>  

<div class= "main"><br>
  <h3> Supplier ID :
    
  <?php 
  echo $sid;
  ?></h3><br> <hr><br><br>

  <div class="card-container">
    <div class="card">
    <image class="card-image" src="../public/images/usr.jpg">
      <div class="card-body">
      <a href="../View/SupplierAccount.php"> 
      <p class="card-title">User propfile</p></a>
      </div>  
    </div>  
  <div class="card">
    <image class="card-image" src="../public/images/contact.jpeg">
    <div class="card-body">
    <a href="../View/ContactAdmin.php">
    <p class="card-title">Contact Admin</p></a>      
    </div>  
  </div>  
    <div class="card">
    <image class="card-image" src="../public/images/astore.jpg">
      <div class="card-body">
      <a href="../View/ViewProduct.php">
      <p class="card-title">View Product</p></a>
      </div>  
    </div> 
  </div> 

</div>
     

   
</body>
</html> 
     

         