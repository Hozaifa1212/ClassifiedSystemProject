<?php
if(isset($_POST["pp"]))
{
    header("location: ../View/PurchaseProduct.php");
}
if(isset($_POST["pr"]))
{
    header("location: ../View/Purchase_View.php");
}
if(isset($_POST["spr"]))
{
    header("location: ../View/Purchase_Search.php");
}
if(isset($_POST["on"]))
{
    header("location: ../View/GiveOrder.php");
}
if(isset($_POST["p"]))
{
    header("location: ../View/Add_Product.php");
}
if(isset($_POST["sp"]))
{
    header("location: ../View/Product_Delete.php");
}
if(isset($_POST["sr"]))
{
    header("location: ../View/Product_Search.php");
}
if(isset($_POST["t"]))
{
    header("location: ../View/Product_View.php");
}
if(isset($_POST["ser"]))
{
    header("location: ../View/Sell_View.php");
}
if(isset($_POST["ssr"]))
{
    header("location: ../View/Sell_Search.php");
}
if(isset($_POST["dr"]))
{
    header("location: ../View/Trans_Search_View.php");
}if(isset($_POST["pay"]))
{
    header("location: ../View/Payment.php");
}
if(isset($_POST["logout"]))
{
    header("location: ../Control/LogOut.php");
}
if(isset($_POST["myaccount"]))
{
    header("location: ../View/MyAccount.php");
}
if(isset($_POST["edit"]))
{
   
    header("location: ../View/EditAccount.php");
}
if(isset($_POST["contoadmin"]))
{
    header("location: ../View/ContactWithAdmin.php");
}
?>