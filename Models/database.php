<?php
   function runQuery($q) {
   	  $username = "root";
   	  $servername = "localhost";
   	  $password = "";
   	  $database = "travelling_agencies_info";
   	  $con = mysqli_connect($servername, $username, $password, $database);
   	  if (!$con) {
   	  	die("Failed to connect to the server" . mysqli_connect_error());
   	  }
        mysqli_query($con, $q);
   }
   function getResult($q) {
   	  $username = "root";
   	  $servername = "localhost";
   	  $password = "";
   	  $database = "travelling_agencies_info";
   	  $con = mysqli_connect($servername, $username, $password, $database);
         if (!$con) {
         	 die("Failed to connect to the server" . mysqli_connect_error());
         }
   	  $result = mysqli_query($con, $q);
         $data = array();
         if ($result && mysqli_num_rows($result) > 0) {
            while ($result && $row = mysqli_fetch_assoc($result)) {
               $data[] = $row;
            }
         }
         return $data;
   }
?>