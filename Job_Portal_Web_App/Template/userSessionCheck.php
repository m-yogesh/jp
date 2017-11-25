<?php
session_start();
if($_SESSION["seeker_user_session"] != true && $_SESSION['seeker_user_session'] ==''){
    echo "<script>Alert('User Session is not available');</script>";
    header("Location: ../Login/login.php");
    exit;
}else if($_SESSION["userInfo"] != true && $_SESSION['userInfo'] ==''){
    echo "<script>Alert('User Information is not available');</script>";
    header("Location: ../Login/login.php");
    exit;
}
?>