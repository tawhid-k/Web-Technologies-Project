<?php
   require_once 'Models/database.php';
   $data = getResult("select * from agency");
   $places = array();
   $numbers = array();
   $locations = array();
   $first_index = 0;
   $last_index = $first_index + 7;
   $final_index = count($data);
   $last_index = min($last_index, $final_index);
   foreach($data as $i) {
   	  $places[] = $i["name"];
   	  $numbers[] = $i["phn"];
   	  $locations[] = $i["location"];
   }
   if (isset($_POST["prev"])) {
      $first_index = max($first_index - 7, 0);
      $last_index = min($last_index, $final_index);
   }
   if (isset($_POST["nxt"])) {
      $first_index += 7;
      $last_index = min($first_index + 7, $final_index);
   }
?>