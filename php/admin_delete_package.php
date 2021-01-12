<?php 
    require_once '../Models/database.php';
    $p_no = $_GET["number"];
    runQuery("delete from package where package_no='$p_no'");
    header("Location: ../admin.php");
?>