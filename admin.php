<?php
   $button_clicked = 0;
   if (isset($_POST["details"])) {
     $button_clicked = 0;
   }
   if (isset($_POST["t_agent"])) {
     $button_clicked = 1;
   }
   if (isset($_POST["hotels"])) {
     $button_clicked = 2;
   }
   if (isset($_POST["spots"])) {
     $button_clicked = 3;
   }
   if (isset($_POST["logout"])) {
     header("Location: home.php");
   }
?>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
     <form action="" method="post">
     	<div class="side-bar">
     		<h2>admin</h2>
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
     				<input type="submit" name="spots" value="Travelling Spots">
     			</div>
     			<div class="button">
     				<input type="submit" name="logout" value="Logout">
     			</div>
     		</div>
     	</div>
     	<div class="main-bar">
     		<div class="button-collection">
                    <?php
                       if ($button_clicked == 0) {
                         echo '
                              <div class="button1">
                              <input type="submit" name="details" value="View Details">
                              </div>
                              <div class="button2">
                                   <input type="submit" name="add" value="Add User">
                              </div>
                              <div class="button3">
                                   <input type="submit" name="u_info" value="Update Info">
                              </div>
                              <div class="button4">
                                   <input type="submit" name="rmv" value="Remove User">
                              </div>
                         ';
                       }
                       else if ($button_clicked == 1) {
                         echo '
                              <div class="button1">
                              <input type="submit" name="details" value="View Details">
                              </div>
                              <div class="button2">
                                   <input type="submit" name="add" value="Add Agencies">
                              </div>
                              <div class="button3">
                                   <input type="submit" name="u_info" value="Update Info">
                              </div>
                              <div class="button4">
                                   <input type="submit" name="rmv" value="Remove Agency">
                              </div>
                         ';
                       }
                       else if ($button_clicked == 2) {
                         echo '
                              <div class="button1">
                              <input type="submit" name="details" value="View Details">
                              </div>
                              <div class="button2">
                                   <input type="submit" name="add" value="Add Hotels">
                              </div>
                              <div class="button3">
                                   <input type="submit" name="u_info" value="Update Info">
                              </div>
                              <div class="button4">
                                   <input type="submit" name="rmv" value="Remove Hotel">
                              </div>
                         ';
                       }
                       else if ($button_clicked == 3) {
                         echo '
                              <div class="button1">
                              <input type="submit" name="details" value="View Place Details">
                              </div>
                              <div class="button2">
                                   <input type="submit" name="add" value="Add New Travelling Spot">
                              </div>
                              <div class="button3">
                                   <input type="submit" name="u_info" value="Update Info / Add Pictures">
                              </div>
                              <div class="button4">
                                   <input type="submit" name="rmv" value="Remove Spot">
                              </div>
                         ';
                       }
                    ?>
     		</div>
     	</div>
     </form>
</body>
</html>