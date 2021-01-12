<?php require "php/admin_operations.php" ?>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
     	<div class="side-bar">
     		<h2>admin</h2>
     		<form action="" method="post">
          <div class="button-collection">
     			<div class="button">
     				<input type="submit" name="user" value="User">
     			</div>
     			<div class="button">
     				<input type="submit" name="t_agent" value="Travelling Agencies">
     			</div>
     			<div class="button">
     				<input type="submit" name="hotels" value="Hotels">
     			</div>
     			<div class="button">
     				<input type="submit" name="spots" value="Packages">
     			</div>
     			<div class="button">
     				<input type="submit" name="logout" value="Logout">
     			</div>
     		</div>
        </form>
     	</div>
      <?php
          if (isset($_COOKIE["state"])) {
            if ($_COOKIE["state"] == "remove client") {
              $button_clicked = 0;
            }
            else if ($_COOKIE["state"] == "remove agency") {
              $button_clicked = 1;
            }
            else if ($_COOKIE["state"] == "remove hotel") {
              $button_clicked = 2;
            }
          }     
      ?>
     	<div class="main-bar" id="main-bar">
     		<div class="button-collection">
                    <?php
                       if ($button_clicked == 0) {
                         echo '
                              <div class="button1">
                              <button onclick="showUserDetails(); return false;"> Details </button>
                              </div>
                              <div class="button2">
                              <button onclick="addUser(); return false;"> Add User </button>
                              </div>
                              <div class="button3">
                              <button onclick="updateUser(); return false;"> Update Info </button>
                              </div>
                              <div class="button4">
                              <button onclick="removeUser(); return false;"> Remove User </button>
                              </div>
                         ';
                       }
                       else if ($button_clicked == 1) {
                         echo '
                              <div class="button1">
                              <button onclick="showAgencyDetails()"; return false;> Details </button>
                              </div>
                              <div class="button2">
                              <button onclick="addAgency(); return false;"> Add agency </button>
                              </div>
                              <div class="button3">
                              <button onclick="updateAgency()"> Update agency </button>
                              </div>
                              <div class="button4">
                              <button onclick="removeAgency()"> Remove agency </button>
                              </div>
                         ';
                       }
                       else if ($button_clicked == 2) {
                         echo '
                              <div class="button1">
                              <button onclick="showHotelDetails(); return false;"> Details </button>
                              </div>
                              <div class="button2">
                              <button onclick="addHotel(); return false;"> Add hotel </button>
                              </div>
                              <div class="button3">
                              <button onclick="updateHotel(); return false;"> Update hotel info </button>
                              </div>
                              <div class="button4">
                              <button onclick="removeHotel(); return false;"> Remove hotel </button>
                              </div>
                         ';
                       }
                       else if ($button_clicked == 3) {
                         echo '
                              <div class="button1">
                              <button onclick="showPackageDetails(); return false;"> Show package </button>
                              </div>
                              <div class="button2">
                              <button onclick="addPackage(); return false;"> Add package </button>
                              </div>
                              <div class="button3">
                              <button onclick="updatePackage(); return false;"> Update package </button>
                              </div>
                              <div class="button4">
                              <button onclick="removePackage(); return false;"> Remove package </button>
                              </div>
                         ';
                       }
                    ?>
     		</div>
               <div id="data"> </div>
     	</div>
     <script src="admin_buttons_option.js"></script>
     <script src="admin_addUser_validations.js"></script>
     <?php 
        if (isset($_COOKIE["state"])) {
           if ($_COOKIE["state"] == "remove client") {
             echo "<script> removeUser(); </script>";
           }
           else if ($_COOKIE["state"] == "remove agency") {
             echo "<script> removeAgency(); </script>";
           }
           else if ($_COOKIE["state"] == "remove hotel") {
             echo "<script> removeHotel(); </script>";
           }
        }
        else {
           if ($button_clicked == 0) {
             echo "<script> showUserDetails(); </script>";
           }
           else if ($button_clicked == 1) {
             echo "<script> showAgencyDetails(); </script>";
           }
           else if ($button_clicked == 2) {
             echo "<script> showHotelDetails(); </script>";
           }
           else if ($button_clicked == 3) {
             echo "<script> showPackageDetails(); </script>";
           }
        }
     ?>
</body>
</html>
