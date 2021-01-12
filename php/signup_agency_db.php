<?php
    require_once 'Models/database.php';
    if (isset($_POST["signup"])) {
      $name = $_POST["name"];
      $uname = $_POST["uname"];
      $email = $_POST["email"];
      $phn = $_POST["number"];
      $location = $_POST["location"];
      $pass = md5($_POST["pass"]);
      $query = "insert into agency values('$name','$uname','$email','$phn','$location','$pass')";
      runQuery($query);
      $query = "insert into user_info values('$uname','$pass',2)";
      runQuery($query);
    }
?>