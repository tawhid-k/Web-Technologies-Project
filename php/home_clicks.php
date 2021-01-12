<?php
   require_once 'models/database.php';
   session_start();
   if (isset($_POST["login"])) {
     header("Location: login.php");
   }
   if (isset($_POST["filter_search"])) {
     header("Location: filterSearch.php");
   }
   if (isset($_POST["signup"])) {
     header("Location: signup_as.php");
   }
   if (isset($_POST["logout"])) {
     setcookie("username", "", time() - 10);
     header("Location: home.php");
   }
   if (isset($_POST["profile"])) {
     header("Location: client-profile.php");
   }
   if (isset($_POST["contact"])) {
     header("Location: contact.php");
   }
   if (isset($_POST["travel_agencies"])) {
     header("Location: agencies.php");
   }
   function get_packages() {
     return getResult("select * from package");
   }
   function filtered_packages() {
      $des = $_SESSION["des"];
      $people = $_SESSION["people"];
      $days = $_SESSION["days"];
      $type = $_SESSION["type"];
      $max_b = $_SESSION["max_b"];
      $min_b = $_SESSION["min_b"];
      $data = get_packages();
      $filtered_data = array();
      foreach ($data as $i) {
         $valid = true;
         if ($i["place_type"] != $type) {
            $valid = false;
         }
         if ($i["location"] != $des) {
            $valid = false;
         }
         $cost = getResult("select cost from hotel_desc where username = '".$i["hotel_name"]."'");
         $cost = $cost[0]["cost"];
         $cost = $cost * $days * $people;
         if ($cost >= $min_b && $cost <= $max_b) {
           $filtered_data[] = $i;
         }
      }
      return $filtered_data;
   }
   function get_package_info($i) {
     return getResult("select * from package where package_no=".$i);
   }
   function get_hotel_info($i) {
     return getResult("select * from hotel where username='".$i."'");
   }
   function get_more_hotel_info($i) {
     return getResult("select * from hotel_desc where username='".$i."'");
   }
   function get_agency_name($data) {
     $name = getResult("select name from agency where username = '".$data[0]["agency_name"]."'");
     $name = $name[0]["name"];
     return $name;
   }
   function get_searched_place($place) {
     return getResult("select * from package where location like '%$place%'");
   }
   function get_hotel_name($data) {
     $name = getResult("select name from hotel where username = '".$data[0]["hotel_name"]."'");
     $name = $name[0]["name"];
     return $name;
   }
   function cost_per_person($data) {
     $cost = getResult("select cost from hotel_desc where username = '".$data[0]["hotel_name"]."'");
     $cost = $cost[0]["cost"];
     return $cost;
   }
?>
