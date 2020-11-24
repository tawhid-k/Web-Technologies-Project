<?php
   if (isset($_POST["submit"])) {
   	 if (!empty($_POST["user_type"])) {
   	 	if ($_POST["user_type"] == "u1") {
   	 	  header("Location: signup.php");
   	 	}
   	 	else if ($_POST["user_type"] == "u2") {
   	 	  header("Location: agency-registration.php");
   	 	}
   	 	else if ($_POST["user_type"] == "u3") {
   	 	  header("Location: hotelRegister.php");
   	 	}
   	 }
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup as</title>
</head>
<body>
     <form action="" method="post">
     	<h1>Signup As..</h1>
     	<select name="user_type">
     		<option value="u1">User</option>
     		<option value="u2">Travelling Agency</option>
     		<option value="u3">Hotel Owner</option>
     	</select>
     	<input type="submit" name="submit" value="proceed">
     </form>
</body>
</html>