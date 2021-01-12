<?php require "php/signup_validation.php" ?>
<html>
	<head>
		<title>Signup</title>
		<link rel="stylesheet" type="text/css" href="css/signup.css">
	</head>
	<body>
		<form action="" method="post">
			<div>
	           <div class="first-part">
	           <h3>Welcome to</h3>
	           <h1>Travelling Agent</h1>
	           </div>
	           <div class="second-part">
	           	  <h1>Sign Up</h1>
	           	  <div class="components">
	           	  	 <label>First Name</label>
	           	  	 <input type="text" name="f_name" placeholder="<?php echo($err_fname); ?>">
	           	  </div>
	           	  <div class="components">
	           	  	 <label>Last Name</label>
	           	  	 <input type="text" name="s_name" placeholder="<?php echo($err_sname); ?>">
	           	  </div>
	           	  <div class="components">
	           	  	 <label>Username</label>
	           	  	 <input type="text" name="u_name" placeholder="<?php echo($err_uname); ?>">
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
	           	  <input type="submit" name="submit" value="Create">
	           </div>
	        </div>
		</form>
	</body>
</html>