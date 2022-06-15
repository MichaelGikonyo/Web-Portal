<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
unset($_SESSION['lasti']);
session_unset(); 
header("Location:login.php");
?>