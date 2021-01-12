<?php
   if (isset($_POST["submit"])) {
   	 if (!empty($_POST["user_type"])) {
   	 	if ($_POST["user_type"] == "u1") {
   	 	  header("Location: signup.php");
   	 	}
   	 	else if ($_POST["user_type"] == "u2") {
   	 	  header("Location: signup_agency.php");
   	 	}
   	 	else if ($_POST["user_type"] == "u3") {
   	 	  header("Location: hotelRegister.php");
   	 	}
   	 }
   }
?>
