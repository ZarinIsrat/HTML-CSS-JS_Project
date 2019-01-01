<?php
session_start();
$_SESSION["flag"]="";
setcookie('login', '', time()-100, '/');
setcookie('autologin', '', time()-100, '/');
header("Location:newlogin.php");
?>