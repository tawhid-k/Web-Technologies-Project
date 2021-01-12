<?php
	$err_cname = "";
	$err_mail = "";
	$err_pass = "";
	$err_cpass = "";

	if (isset($_POST["submit"])) {
   	 if (empty($_POST["cname"])) {
       $err_fname = "required*";
   	 }
   	 else for ($i = 0; $i < strlen($_POST["cname"]); $i++) {
   	   if ($_POST["cname"][$i] >= '0' && $_POST["cname"][$i] <= '9') {
   	   	 $err_cname = "No numeric vales in Agency Name*";
   	   }
   	 }

   	 if (empty($_POST["email"])) {
   	  	$err_mail = "required*";
   	  }
   	  else if (strlen(strpos($_POST["email"] , "@")) > 0 && strlen(strpos($_POST["email"], ".")) > 0) {
   	  	if (strpos($_POST["email"] , "@") > strrpos($_POST["email"], ".")) {
   	  	  $err_mail = "Invalid mail format [wrong placcement]";
   	  	}
   	  }
   	  else $err_mail = "Invalid mail format [Missing characters]";
   	  if (empty($_POST["pass"])) {
   	  	$err_pass = "required*";
   	  }
   	  else if (strlen($_POST["pass"]) < 5) {
   	  	$err_pass = "Password must be at least 5 characters long*";
   	  }

   	  if (empty($_POST["cpass"])) {
   	  	$err_cpass = "required*";
   	  }
      else {
      	if (empty($_POST["pass"])) {
      	  $err_cpass = "Please set a password first*";
      	}
      	else if ($_POST["pass"] != $_POST["cpass"]) {
      	  $err_cpass = "Password didn't match";
      	}
      }

?>
