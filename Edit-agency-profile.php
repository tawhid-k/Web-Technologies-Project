<?php require "php/Edit-agency-profile-validation.php" ?>
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