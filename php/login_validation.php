<?php
   require_once 'Models/database.php'; 
   $hasError = false;
   $placeholder_uname = "Username";
   $placeholder_pass = "Password";
   $value_uname = "";
   $value_pass = "";
   $user_type = "";
   if (isset($_POST["login"])) {
   	  if (empty($_POST["uname"])) {
   	  	$hasError = true;
   	  }
   	  else $value_uname = $_POST["uname"];
   	  if (empty($_POST["pass"])) {
   	  	$hasError = true;
   	  }
   	  else $value_pass = $_POST["pass"];
   	  if (!$hasError && $value_uname == "admin" && $value_pass == "admin") {
        header("Location: admin.php");
      }
      else if (!$hasError) {
         if (isUser($_POST["uname"], md5($_POST["pass"]))) {
           setcookie("username", $_POST["uname"], time() + 3600);
           echo $user_type;
           if ($user_type == 1)
           header("Location: home.php");
           else if ($user_type == 2) 
           header("Location: agency-index.php");
           else if ($user_type == 3)
           header("Location: hotel-index.php");
         }
   	}
   }
   function isUser($u, $p) {
      $data = getResult("select * from user_info where username='$u' and password='$p'");
      if (count($data) > 0) {
         global $user_type;
         $user_type = $data[0]["user_type"];
         return true;
      }
      else return false;
   }
?>
