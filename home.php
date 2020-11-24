<?php
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
   if (isset($_POST["contact"])) {
     header("Location: contact.php");
   }
   if (isset($_POST["travel_agencies"])) {
     header("Location: agencies.php");
   }
?>
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
                        <input type="submit" name="logout" value="logout">
                     </div>';
                   } 
                 ?>
            </div>
            <div class="search_items">
                <input type="text" name="sBox" placeholder="Search for your destination">
                <input type="submit" name="sButton" value="search">
            </div>
            <div class="container">
                <div class="pack">
                    <div class="img1"></div>
                        <div class="align-text">
                          <a href="ShowPlace.php">Sylhet Tourist Places - Where To Go And What To Do..</a>
                        </div>
                </div>
                <div class="pack">
                    <div class="img2"></div>
                        <div class="align-text">
                          <a href="ShowPlace.php">Teknaf Sea Beach - Best Places To Visit In Bangladesh In This Winder..</a>
                        </div>
                </div>
                <div class="pack">
                    <div class="img3"></div>
                        <div class="align-text">    
                          <a href="ShowPlace.php">Kuakata Sea Beach - Enormous Experience With Sea Beach And Local Traditions..</a>
                        </div>
                </div>
                <div class="pack">
                    <div class="img4"></div>
                        <div class="align-text">    
                            <a href="">Rangamati - Discover Cultural Diversities And Beautiful Places..</a>
                        </div>
                </div>
                <div class="pack">
                    <div class="img5"></div>
                        <div class="align-text">    
                            <a href="ShowPlace.php">Bandarban - Have the most unique ever experience in Bamgladesh..</a>
                        </div>
                </div>
                <div class="pack">
                    <div class="img6"></div>
                        <div class="align-text">    
                            <a href="ShowPlace.php">Rangamati - Discover Cultural Diversities And Beautiful Places..</a>
                        </div>
                </div>
            </div>
        </form>
    </body>
</html>