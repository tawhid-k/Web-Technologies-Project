<?php
	$err_agencyname = "";
	$err_mail = "";
	$err_pass = "";
	$err_cpass = "";
	$err_location = "";

	if (isset($_POST["submit"])) {
   	 if (empty($_POST["agency_name"])) {
       $err_agencyname = "required*";
   	 }
   	 else setcookie("username", $_POST["agency_name"], time() + 3600);
   	 for ($i = 0; $i < strlen($_POST["agency_name"]); $i++) {
   	   if ($_POST["agency_name"][$i] >= '0' && $_POST["agency_name"][$i] <= '9') {
   	   	 $err_agencyname = "No numeric vales in Agency Name*";
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
   }
?>

<style type="text/css">
	form {
		border: 5px dotted red;
		width: 500px;
		height: 700px;
		margin-top: 20px;
		margin-left: auto;
		margin-right: auto;
	}
	.check-box {
		display: grid;
		grid-template-columns: 1fr 1fr;
		grid-column-gap: 0px;
		grid-row-gap: 10px;
	}
	td {
	    border: 10px solid white;
	}
	td {
	   margin-top: 30px;
	}
	h1 {
		margin-top: 0px;
		color: blue;
		font-size: 100px;
		margin-bottom: 10px;
	}
	h3 {
		color: red;
	}
	label {
		font-size: 20px;
		font-family: "Time New Roman";
	}
	input[type="submit"] {
		border: none;
		width: 100px;
		height: 30px;
		margin-top: 20px;
		background-color: red;
		color: white;
	}
</style>

<!DOCTYPE html>
<html>
<head>
	<title>Agency Registration</title>
	
</head>
<body>
	<form action="" method="post">
		<h1 align="center">Welcome!</h1>
		<h3 align="center">please fill up the form below</h3>

		<table align="center">
			<tr>
				<td>
					<label>Agency Name:</label>
				</td>
				<td>
					<input type="text" name="agency_name" placeholder="<?php echo($err_agencyname); ?>">
				</td>
			</tr>
			<tr>
				<td><label>Location:</label></td>
				<td>
					<div class="check-box">
					<input type="checkbox" name=""><label>Dhaka</label> 
					<input type="checkbox" name=""><label>Rajshahi</label>
					<input type="checkbox" name=""><label>Khulna</label>
					<input type="checkbox" name=""><label>Sylhet</label> 
					<input type="checkbox" name=""><label>Barisal</label>
					<input type="checkbox" name=""><label>Chittagong</label>
					<input type="checkbox" name=""><label>Mymensing</label>
				    </div>
				</td>
			</tr>
			<tr>
				<td>
					<label>Email:</label>
				</td>
				<td>
					<input type="text" name="email" placeholder="<?php echo($err_mail); ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label>Password:</label>
				</td>
				<td>
					<input type="password" name="pass" placeholder="<?php echo($err_pass); ?>">
				</td>
			</tr>
			<tr>
				<td>
					<label>Confirm Password: &nbsp &nbsp &nbsp </label>
				</td>
				<td>
					<input type="password" name="cpass" placeholder="<?php echo($err_cpass); ?>">
				</td>
			</tr>
			<tr>
					<td colspan="2" align="center">
						<input type="submit" value="Register" name="submit">
					</td>
				</tr>
				
				
		</table>
	</form>
</body>
</html>