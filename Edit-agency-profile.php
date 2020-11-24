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

<!DOCTYPE html>
<html>
<head>
	<title>Edit your agency Profile</title>
</head>
<body>
	<form action="" method="post">
		<h1 align="center">Edit Profile</h1>
		<h3 align="center">Carefully fillup the form below</h3>
		<table align="center">
			<tr>
				<td>
					<label>Change Name:</label>
				</td>
				<td>
					<input type="text" name="cname" placeholder="<?php echo($err_cname); ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label>Confirm Location:</label>
				</td>
				<td>
					<input type="checkbox" name="">Dhaka
					<input type="checkbox" name="">Rajshahi
					<input type="checkbox" name="">Khulna
					<input type="checkbox" name="">Sylhet
					<input type="checkbox" name="">Barisal
					<input type="checkbox" name="">Chittagong
					<input type="checkbox" name="">Mymensing
				</td>
			</tr>
			<tr>
				<td>Change Email:</td>
				<td>
					<input type="text" name="email" placeholder="<?php echo($err_mail); ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label>Change Password:</label>
				</td>
				<td>
					<input type="password" name="pass" placeholder="<?php echo($err_pass); ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label>Confirm Password:</label>
				</td>
				<td>
					<input type="password" name="cpass" placeholder="<?php echo($err_cpass); ?>">
				</td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="Confirm Change">
				</td>
			</tr>
		</table>
	</form>	
</body>
</html>