<?php 
    require_once '../Models/database.php';
    $uname = $_GET["username"];
    runQuery("delete from hotel where username='$uname'");
    runQuery("delete from user_info where username='$uname'");
    runQuery("delete from package where hotel_name='$uname'");
    runQuery("delete from hotel_desc where username='$uname'");
    setcookie("state", "remove hotel", time() + 3, "/");
    header("Location: ../admin.php");
?>