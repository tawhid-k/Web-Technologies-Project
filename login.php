<?php require "php/login_validation.php" ?>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<form action="" method="post">
		<table class="table" align="center">
			<tr>
				<td align="center">
					<h1>Login</h1>
				</td>
			</tr>
			<tr>
				<?php
           if ($hasError) {
           	 if (empty($_POST["uname"])) {
           	 	$placeholder_uname = "required*";
           	 	echo '
                   <style>
                      .input input[type="text"]::placeholder {
                      	color: red;
                      }
                   </style>
           	 	';
           	 }
           	 if (empty($_POST["pass"])) {
           	 	$placeholder_pass = "required*";
           	 	echo '
                   <style>
                      .input input[type="Password"]::placeholder {
                      	color: red;
                      }
                   </style>
           	 	';
           	 }
           }
				?>
				<td align="center" class="input">
					<input type="text" name="uname" placeholder="<?php echo($placeholder_uname); ?>" value="<?php echo($value_uname)?>">
				</td>
			</tr>
			<tr>
				<td align="center" class="input">
					<input type="password" name="pass" placeholder="<?php echo($placeholder_pass); ?>" value="<?php echo($value_pass)?>">
				</td>
			</tr>
			<tr align="center">
				<td>
					<input type="submit" name="login" value="Login">
				</td>
			</tr>
			<tr align="center">
				<td>
					<input type="submit" name="new_ac" value="Create a new account">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>