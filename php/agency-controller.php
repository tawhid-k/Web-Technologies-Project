<?php
    require_once 'Models/database.php';
    if (!isset($_COOKIE["username"])) {
       header("Location: home.php");
    }
    $uname = $_COOKIE["username"];
    $button_clicked = 0;
    if (isset($_POST["update"])) {
       $button_clicked = 1;
    }
    if (isset($_POST["add_info"])) {
       $button_clicked = 2;
    }
    if (isset($_POST["confirm_update"])) {
      $name = $_POST["name"];
      $uname = $_POST["uname"];
      $email = $_POST["email"];
      $phn = $_POST["phn"];
      $location = $_POST["location"];
      $password = $_POST["pass"];
      updateUserAgency($name, $uname,$email, $phn, $location, $password);
    }
    if (isset($_POST["add_change"])) {
      $has_error = false;
      if (empty($_POST["hotel"])) {
        $has_error = true;
      }
      if (empty($_POST["location"]) == "Select a Location") {
        $has_error = true;
      }
      if (empty($_POST["tour_spots"])) {
        $has_error = true;
      }
      if (empty($_POST["description"])) {
        $has_error = true;
      }
      if ($_POST["type"] == "Specify your interest") {
        $has_error = true;
      }
      if ($has_error) {
          $filetype = strtolower(pathinfo(basename($_FILES["Picture"]["name"]), PATHINFO_EXTENSION));
          $file = "root/" . uniqid() . ".$filetype";
          move_uploaded_file($_FILES["Picture"]["tmp_name"], $file);
          $hotel = getResult("select username from hotel where name='".$_POST["hotel"]."'");
          $hotel = $hotel[0]["username"];
          add_package($_COOKIE["username"], $hotel,
          $_POST["location"],$file, $_POST["tour_spot"],  $_POST["type"] ,$_POST["description"]);
      }
    }
    if (isset($_POST["delete"])) {
       $uname = $_COOKIE["username"];
       runQuery("delete from agency where username='$uname'");
       runQuery("delete from user_info where username='$uname'");
       runQuery("delete from package where agency_name='$uname'");
       setcookie("username", "", time() - 10);
       header("Location: home.php");
    }
    if (isset($_POST["logout"])) {
      setcookie("username", "", time() - 10);
      header("Location: home.php");
    }
    function add_package($un, $hotel, $l,$pic, $tours, $type,$d) {
       //echo "<span style='color:white;'> insert into package values(1,'$un','$hotel','$l','$pic','$tours','$d') </span>";
       runQuery("insert into package values('','$un','$hotel','$l','$pic','$tours','$type','$d')");
    }
    function userInfo() {
       global $uname;
       return getResult("select * from agency where username='$uname'");
    }
    function updateUserAgency($n, $un, $m, $phn,$location ,$p) {
      runQuery("update agency set name='$n',email='$m', phn='$phn',location='$location', password='$p' where username='$un'");
      runQuery("update user_info set password='$p' where username='$un'");
   }
   function hotelNames() {
     $q="select * from hotel";
     return getResult($q);
   }
?>