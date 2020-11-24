<?php
   $err_fname = "";
   $err_sname = "";
   $errMail = "";
   $err_pass = "";
   $err_cpass = "";
   if (isset($_POST["submit"])) {
   	 if (empty($_POST["f_name"])) {
       $err_fname = "required*";
   	 }
       else setcookie("username", $_POST["f_name"], time() + 3600);
   	 else for ($i = 0; $i < strlen($_POST["f_name"]); $i++) {
   	   if ($_POST["f_name"][$i] >= '0' && $_POST["f_name"][$i] <= '9') {
   	   	 $err_fname = "No numeric vales in name*";
   	   }
   	 }
   	 if (empty($_POST["s_name"])) {
       $err_sname = "required*";
   	 }
   	 if (empty($_POST["email"])) {
   	  	$errMail = "required*";
   	  }
   	  else if (strlen(strpos($_POST["email"] , "@")) > 0 && strlen(strpos($_POST["email"], ".")) > 0) {
   	  	if (strpos($_POST["email"] , "@") > strrpos($_POST["email"], ".")) {
   	  	  $errMail = "Invalid mail format [wrong placcement]";
   	  	}
   	  }
   	  else $errMail = "Invalid mail format [Missing characters]";
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
   }
?>
<html>
	<head>
		<title>Signup</title>
		<link rel="stylesheet" type="text/css" href="css/signup2.css">
	</head>
	<body>
		<form action="" method="post">
			<div>
	           <div class="first-part">
	           <h3>Welcome to</h3>
	           <h1>Travelling Agent</h1>
	           </div>
	           <div class="second-part">
	           	  <h1>Register As Hotels</h1>
	           	  <div class="components">
	           	  	 <label>Hotel Name</label>
	           	  	 <input type="text" name="f_name" placeholder="<?php echo($err_fname); ?>">
	           	  </div>
	           	  <div class="components">
	           	  	 <label>Address</label>
	           	  	 <input type="text" name="s_name" placeholder="<?php echo($err_sname); ?>">
	           	  </div>
	           	  <div class="components">
	           	  	 <label>Email</label>
	           	  	 <input type="text" name="email" placeholder="<?php echo($errMail); ?>">
	           	  </div>
	           	  <div class="components">
	           	  	 <label>Password</label>
	           	  	 <input type="password" name="pass" placeholder="<?php echo($err_pass); ?>">
	           	  </div>
	           	  <div class="components">
	           	  	 <label>Confirm Password</label>
	           	  	 <input type="password" name="cpass" placeholder="<?php echo($err_cpass); ?>">
	           	  </div>
	           	  <input type="submit" name="submit" value="Register">
	           </div>
	        </div>
		</form>
	</body>
</html>