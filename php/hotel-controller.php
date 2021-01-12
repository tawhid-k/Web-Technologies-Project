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
      $address = $_POST["address"];
      $pass = $_POST["pass"];
      updateUserHotel($name, $uname, $address,$email, $phn, $pass);
    }
    if (isset($_POST["add_change"])) {
      $has_error = false;
      if (empty($_POST["room"])) {
        $has_error = true;
      }
      if (empty($_POST["location"]) == "Select a Location") {
        $has_error = true;
      }
      if (empty($_POST["meal"])) {
        $has_error = true;
      }
      if ($_POST["cost"] == 0) {
        $has_error = true;
      }
      if (empty($_POST["desc"])) {
        $has_error = true;
      }
      if (!$has_error) {
          $filetype = strtolower(pathinfo(basename($_FILES["img"]["name"]), PATHINFO_EXTENSION));
          $file = "root/" . uniqid() . ".$filetype";
          move_uploaded_file($_FILES["img"]["tmp_name"], $file);
          add_additional_info($_COOKIE["username"], $_POST["room"],
          $_POST["cost"], $_POST["location"], $_POST["meal"], $file, $_POST["desc"]);
      }
    }
    if (isset($_POST["delete"])) {
       $uname = $_COOKIE["username"];
       runQuery("delete from hotel where username='$uname'");
       runQuery("delete from user_info where username='$uname'");
       runQuery("delete from hotel_desc where username='$uname'");
       runQuery("delete from package where hotel_name='$uname'");
       setcookie("username", "", time() - 10);
       header("Location: home.php");
    }
    if (isset($_POST["logout"])) {
      setcookie("username", "", time() - 10);
      header("Location: home.php");
    }
    function add_additional_info($un, $room, $cost, $l, $meal, $img, $d) {
       //$q = "insert into hotel_desc values('$un','$room',$cost,'$l','$meal','$img','$d')";
       //echo '<span style="color:white;""> '.$q.' </span>';
       runQuery("insert into hotel_desc values('$un','$room',$cost,'$l','$meal','$img','$d')");
    }
    function userInfo() {
       global $uname;
       return getResult("select * from hotel where username='$uname'");
    }
    function updateUserHotel($n, $un, $address, $m, $phn, $p) {
      runQuery("update hotel set name='$n', address='$address',email='$m', phone='$phn', password='$p' where username='$un'");
      runQuery("update user_info set password='$p' where username='$un'");
   }
?>