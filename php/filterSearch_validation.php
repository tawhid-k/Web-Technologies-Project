<?php
   session_start();
   $err_msg = array_fill(0, 4, "");
   function check_error ($index, $value) {
   	 global $err_msg;
   	 $has_error = false;
     if (empty($_POST[$index])) {
   	   $has_error = true;
       $err_msg[$value] = "&nbsprequired*";
   	 }
   	 else if (($index == "days" || $index == "people") && !is_numeric($_POST["$index"])) {
       $has_error = true;
       $err_msg[$value] = "[The field must contain a numeric value]";
   	 }
   }
   if (isset($_POST["submit"])) {
   	 check_error("type", 0);
     check_error("days", 1);
     check_error("people", 2);
     if (!isset($_POST["guide"])) {
       $has_error = true;
       $err_msg[3] = "required*";
     }
     if (!$has_error) {
       $des = $_POST["destination"];
       $type = $_POST["type"];
       $days = intval($_POST["days"]);
       $people = intval($_POST["people"]);
       $min_b = $_POST["min_b"];
       $max_b = $_POST["max_b"];
       $_SESSION["des"] = $des;
       $_SESSION["type"] = $type;
       $_SESSION["days"] = $days;
       $_SESSION["people"] = $people;
       $_SESSION["min_b"] = $min_b;
       $_SESSION["max_b"] = $max_b;
       header("Location: filtered_home.php");
     }
   }
?>
