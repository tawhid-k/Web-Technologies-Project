<?php 
    require_once '../Models/database.php';
    $uname = $_GET["username"];
    runQuery("delete from agency where username='$uname'");
    runQuery("delete from user_info where username='$uname'");
    runQuery("delete from package where agency_name='$uname'");
    runQuery("delete from user_info where username='$uname'");
    setcookie("state", "remove agency", time() + 3, "/");
    header("Location: ../admin.php");
?>