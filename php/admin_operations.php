<?php
   require_once 'Models/database.php';
   $button_clicked = 0;
   if (isset($_POST["details"])) {
     $button_clicked = 0;
   }
   if (isset($_POST["t_agent"])) {
     $button_clicked = 1;
   }
   if (isset($_POST["hotels"])) {
     $button_clicked = 2;
   }
   if (isset($_POST["spots"])) {
     $button_clicked = 3;
   }
   if (isset($_POST["logout"])) {
     header("Location: home.php");
   }
   if (isset($_POST["register_client"])) {
      $fname = $_POST["fname"];
      $lname = $_POST["lname"];
      $uname = $_POST["uname"];
      $email = $_POST["email"];
      $pass = md5($_POST["pass"]);
      addUserClient($fname, $lname, $uname, $email, $pass);
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
      if ($has_error) {
          $filetype = strtolower(pathinfo(basename($_FILES["Picture"]["name"]), PATHINFO_EXTENSION));
          $file = "root/" . uniqid() . ".$filetype";
          move_uploaded_file($_FILES["Picture"]["tmp_name"], $file);
          $hotel = getResult("select username from hotel where name='".$_POST["hotel"]."'");
          $hotel = $hotel[0]["username"];
          add_package($_COOKIE["username"], $hotel,
          $_POST["location"],$file, $_POST["tour_spot"],  $_POST["description"]);
      }
    }
    if (isset($_POST["add_info"])) {
      $has_error = false;
      if (empty($_POST["location"]) == "Select a Location") {
        $has_error = true;
      }
      if (empty($_POST["tour_spots"])) {
        $has_error = true;
      }
      if (empty($_POST["description"])) {
        $has_error = true;
      }
      if ($has_error) {
          $filetype = strtolower(pathinfo(basename($_FILES["Picture"]["name"]), PATHINFO_EXTENSION));
          $file = "root/" . uniqid() . ".$filetype";
          move_uploaded_file($_FILES["Picture"]["tmp_name"], $file);
          $hotel = $_POST["h_name"];
          $agency = $_POST["a_name"];
          add_package($agency, $hotel,
          $_POST["location"],$file, $_POST["tour_spot"],  $_POST["description"]);
      }
    }
    if (isset($_POST["update_package"])) {
      $has_error = false;
      if (empty($_POST["location"]) == "Select a Location") {
        $has_error = true;
      }
      if (empty($_POST["tour_spots"])) {
        $has_error = true;
      }
      if (empty($_POST["description"])) {
        $has_error = true;
      }
      if ($has_error) {
          $filetype = strtolower(pathinfo(basename($_FILES["Picture"]["name"]), PATHINFO_EXTENSION));
          $file = "root/" . uniqid() . ".$filetype";
          move_uploaded_file($_FILES["Picture"]["tmp_name"], $file);
          $hotel = $_POST["h_name"];
          $agency = $_POST["a_name"];
          update_package($_POST["no"], $agency, $hotel,
          $_POST["location"],$file, $_POST["tour_spot"],  $_POST["description"]);
      }
    }
   if (isset($_POST["register_agency"])) {
      $name = $_POST["name"];
      $uname = $_POST["uname"];
      $email = $_POST["email"];
      $phn = $_POST["phn"];
      $location = $_POST["location"];
      $pass = md5($_POST["pass"]);
      $query = "insert into agency values('$name','$uname','$email','$phn','$location','$pass')";
      runQuery($query);
      $query = "insert into user_info values('$uname','$pass',2)";
      runQuery($query);
   }
   if (isset($_POST["register_hotel"])) {
      $name = $_POST["name"];
      $uname = $_POST["uname"];
      $email = $_POST["email"];
      $phn = $_POST["phn"];
      $address = $_POST["address"];
      $pass = md5($_POST["pass"]);
      $query = "insert into hotel values('$name','$uname','$address','$email','$phn','$pass')";
      runQuery($query);
      $query = "insert into user_info values('$uname','$pass',3)";
      runQuery($query);
   }
   if (isset($_POST["update_client"])) {
      $fname = $_POST["fname"];
      $lname = $_POST["lname"];
      $uname = $_POST["uname"];
      $email = $_POST["email"];
      $pass = $_POST["pass"];
      updateUserClient($fname, $lname, $uname, $email, $pass);
   }
   if (isset($_POST["update_agency"])) {
      $name = $_POST["name"];
      $uname = $_POST["uname"];
      $email = $_POST["email"];
      $phn = $_POST["phn"];
      $location = $_POST["location"];
      $pass = $_POST["pass"];
      updateUserAgency($name, $uname, $email, $phn, $location, $pass);
   }
   if (isset($_POST["update_hotel"])) {
      $name = $_POST["name"];
      $uname = $_POST["uname"];
      $email = $_POST["email"];
      $phn = $_POST["phn"];
      $address = $_POST["address"];
      $pass = $_POST["pass"];
      updateUserHotel($name, $uname, $address,$email, $phn, $pass);
   }
   function addUserClient ($fn, $sn, $un, $m, $p) {
      runQuery("insert into client values ('$fn', '$sn', '$un', '$m', '$p')");
      runQuery("insert into user_info values ('$un', '$p', 1)");
   }
   function updateUserClient ($fn, $sn, $un, $m, $p) {
      runQuery("update client set first_name='$fn', last_name='$sn' ,email='$m', password='$p' where username='$un'");
      runQuery("update user_info set password='$p' where username='$un'");
   }
   function updateUserAgency($n, $un, $m, $phn, $l, $p) {
      runQuery("update agency set name='$n', email='$m', phn='$phn', location='$l', password='$p' where username='$un'");
      runQuery("update user_info set password='$p' where username='$un'");
   }
   function updateUserHotel($n, $un, $address, $m, $phn, $p) {
      runQuery("update hotel set name='$n', address='$address',email='$m', phone='$phn', password='$p' where username='$un'");
      runQuery("update user_info set password='$p' where username='$un'");
   }
   function add_package($un, $hotel, $l,$pic, $tours, $d) {
       //echo "<span style='color:white;'> insert into package values(1,'$un','$hotel','$l','$pic','$tours','$d') </span>";
       runQuery("insert into package values('','$un','$hotel','$l','$pic','$tours','$d')");
    }
    function update_package($no, $un, $hotel, $l,$pic, $tours, $d) {
       runQuery("update package set agency_name='$un', hotel_name='$hotel', location='$l', img='$pic', spots='$tours', des='$d' where package_no = $no");
    }
?>