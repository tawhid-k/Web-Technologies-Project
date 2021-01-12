<?php require "php/home_clicks.php" ?>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
    <body>
        <form action="" method="post">
            <div class="heading">
            	 <h1 align="center" class="head_tag_line">Travelling Agent</h1>
                 <div class="comb_buttons">
                    <input class="button_type1" type="submit" name="contact" value="Contact us">
                    <input class="button_type1" type="submit" name="filter_search" value="Filter Search">
                    <input class="button_type1" type="submit" name="travel_agencies" value="Travel Agencies">
                 </div>
                 <p align="center">We help you to get the best ever experience posiible..</p>
                 <?php
                   $check = true;
                   $uname = "";
                   if (isset($_COOKIE["username"])) {
                     $check = false;
                     $uname = $_COOKIE["username"];
                   }
                   if ($check) {
                    echo'<div class="access_buttons">
                        <input class="button_type2" type="submit" name="signup" value="signup">
                        <input class="button_type2" type="submit" name="login" value="login">
                     </div>';
                   }
                   else {
                     echo'<div class="welcome-user">
                        <label style="font-size=5px; color: #EEEEEE;">'; echo $uname; echo '</label>
                        <input type="submit" name="profile" value="profile">
                        <input type="submit" name="logout" value="logout">
                     </div>';
                   } 
                 ?>
            </div>
            <div class="container" id="container">
                <?php 
                   $package = filtered_packages();
                   foreach ($package as $i) {
                       echo '
                            <div class="pack">
                                <div class="img" style="background-image: url('.$i["img"].');"></div>
                                    <div class="align-text">
                                      <a href="ShowPlace.php?package_no='.$i["package_no"].'">'.$i["location"].'</a>
                                    </div>
                            </div>
                       ';
                   }
                ?>
            </div>
        </form>
    </body>
</html>