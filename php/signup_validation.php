<?php
   require "Models/database.php";
   $err_fname = "";
   $err_sname = "";
   $err_uname = "";
   $errMail = "";
   $err_pass = "";
   $err_cpass = "";
   $has_error = false;
   if (isset($_POST["submit"])) {
   	 if (empty($_POST["u_name"])) {
       $err_uname = "required*";
       $has_error = true;
     }
     if (empty($_POST["f_name"])) {
        $err_fname = "required*";
        $has_error = true;
   	 }
   	 else for ($i = 0; $i < strlen($_POST["f_name"]); $i++) {
   	   if ($_POST["f_name"][$i] >= '0' && $_POST["f_name"][$i] <= '9') {
   	   	 $has_error = true;
         $err_fname = "No numeric vales in name*";
   	   }
   	 }
   	 if (empty($_POST["s_name"])) {
       $err_sname = "required*";
       $has_error = true;
   	 }
   	 else for ($i = 0; $i < strlen($_POST["s_name"]); $i++) {
   	   if ($_POST["s_name"][$i] >= '0' && $_POST["s_name"][$i] <= '9') {
   	   	 $err_sname = "No numeric vales in name*";
         $has_error = true;
   	   }
   	 }
   	 if (empty($_POST["email"])) {
   	  	$errMail = "required*";
        $has_error = true;
   	  }
   	  else if (strlen(strpos($_POST["email"] , "@")) > 0 && strlen(strpos($_POST["email"], ".")) > 0) {
   	  	if (strpos($_POST["email"] , "@") > strrpos($_POST["email"], ".")) {
   	  	  $errMail = "Invalid mail format [wrong placcement]";
          $has_error = true;
   	  	}
   	  }
   	  else $errMail = "Invalid mail format [Missing characters]";
   	  if (empty($_POST["pass"])) {
   	  	$err_pass = "required*";
        $has_error = true;
   	  }
   	  else if (strlen($_POST["pass"]) < 5) {
   	  	$err_pass = "Password must be at least 5 characters long*";
        $has_error = true;
   	  }
   	  if (empty($_POST["cpass"])) {
   	  	$err_cpass = "required*";
        $has_error = true;
   	  }
        else {
      	if (empty($_POST["pass"])) {
      	  $err_cpass = "Please set a password first*";
          $has_error = true;
      	}
      	else if ($_POST["pass"] != $_POST["cpass"]) {
      	  $err_cpass = "Password didn't match";
          $has_error = true;
      	}
      }
      if ($has_error == false) {
         addUser($_POST["f_name"], $_POST["s_name"], $_POST["u_name"], $_POST["email"], $_POST["pass"]);
      }
   }
   function addUser ($fn, $sn, $un, $m, $p) {
      $p = md5($p);
      runQuery("insert into client values ('$fn', '$sn', '$un', '$m', '$p')");
      runQuery("insert into user_info values ('$un', '$p', 1)");
      header("Location: home.php");	
   }
?>
