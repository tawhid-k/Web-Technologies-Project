<?php
   require_once 'Models/database.php';
   $err_fname = "";
   $err_sname = "";
   $err_uname = "";
   $errPhn = "";
   $errMail = "";
   $err_pass = "";
   $err_cpass = "";
   $hasError = false;
   if (isset($_POST["submit"])) {
   	 if (empty($_POST["f_name"])) {
         $hasError = true;
         $err_fname = "required*";
   	 }
       else setcookie("username", $_POST["f_name"], time() + 3600);
   	 for ($i = 0; $i < strlen($_POST["f_name"]); $i++) {
   	   if ($_POST["f_name"][$i] >= '0' && $_POST["f_name"][$i] <= '9') {
   	   	 $hasError = true;
             $err_fname = "No numeric vales in name*";
   	   }
   	 }
       if (empty($_POST["uname"])) {
         $hasError = true;
         $err_uname = "required*";
       }
   	 if (empty($_POST["s_name"])) {
         $hasError = true;
         $err_sname = "required*";
   	 }
   	 if (empty($_POST["email"])) {
   	  	$hasError = true;
         $errMail = "required*";
   	  }
        if (empty($_POST["phn"])) {
         $hasError = true;
         $errPhn = "required*";
        }
   	  else if (strlen(strpos($_POST["email"] , "@")) > 0 && strlen(strpos($_POST["email"], ".")) > 0) {
   	  	if (strpos($_POST["email"] , "@") > strrpos($_POST["email"], ".")) {
   	  	  $hasError = true;
           $errMail = "Invalid mail format [wrong placcement]";
   	  	}
   	  }
   	  else $errMail = "Invalid mail format [Missing characters]";
   	  if (empty($_POST["pass"])) {
   	  	$hasError = true;
         $err_pass = "required*";
   	  }
   	  else if (strlen($_POST["pass"]) < 5) {
   	  	$err_pass = "Password must be at least 5 characters long*";
   	  }
   	  if (empty($_POST["cpass"])) {
   	  	$hasError = true;
         $err_cpass = "required*";
   	  }
      else {
      	if (empty($_POST["pass"])) {
      	  $hasError = true;
           $err_cpass = "Please set a password first*";
      	}
      	else if ($_POST["pass"] != $_POST["cpass"]) {
      	  $hasError = true;
           $err_cpass = "Password didn't match";
      	}
      }
      if ($hasError == false) {
         $n = $_POST["f_name"];
         $un = $_POST["uname"];
         $add = $_POST["s_name"];
         $m = $_POST["email"];
         $phn = $_POST["phn"];
         $p = md5($_POST["pass"]);
         runQuery("insert into hotel values('$n','$un','$add','$m','$phn','$p')");
         runQuery("insert into user_info values('$un','$p',3)");
         header("Location: login.php");
      }
   }
?>
