<?php

session_start();

if(session_destroy()) 
{
header("Location: ../View/logIn.php"); 
}
?>