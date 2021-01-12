<?php 
    require_once '../Models/database.php';
    $uname = $_GET["username"];
    runQuery("delete from client where username='$uname'");
    runQuery("delete from user_info where username='$uname'");
    setcookie("state", "remove client", time() + 3, "/");
    header("Location: ../admin.php");
?>