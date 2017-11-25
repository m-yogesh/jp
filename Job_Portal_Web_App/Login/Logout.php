<?php   
session_start();  
unset($_SESSION['seeker_user_session']);  
session_destroy();  
header("location:login.php");  
?>  