<?php
   $err_hnum = "";
   $err_hrnum = "";
   $err_sfaci = "";
   $err_aboutH = "";
   if (isset($_POST["submit"])) {
   	 if (empty($_POST["h_number"])) {
       $err_fname = "required*";
   	 }
   	 
   	 if (empty($_POST["h_r_number"])) {
       $err_sname = "required*";
   	 }
   	 if (empty($_POST["s_facilities"])) {
   	  	$errMail = "required*";
   	  }
   	  if (empty($_POST["about_h"])) {
   	  	$err_pass = "required*";
   	  }
   	  
      
   }
?>
<html>
	<head>
		<title>Hotel Specification</title>
		<link rel="stylesheet" type="text/css" href="css/signup3.css">
	</head>
	<body>
		<form action="" method="post">
			<div>
	           <div class="first-part">
	           <h3>Welcome to</h3>
	           <h1>Travelling Agent</h1>
	           </div>
	           <div class="second-part">
	           	  <h1>Add More Informations</h1>
	           	  <div class="components">
	           	  	 <label>Hotel Number</label>
	           	  	 <input type="text" name="h_number" placeholder="<?php echo($err_hnum); ?>">
	           	  </div>
	           	  <div class="components">
	           	  	 <label>Hotel Rooms Number</label>
	           	  	 <input type="text" name="h_r_number" placeholder="<?php echo($err_hrnum); ?>">
	           	  </div>
	           	  <div class="components">
	           	  	 <label>Special Facilities</label>
	           	  	 <input type="text" name="s_facilities" placeholder="<?php echo($err_sfaci); ?>">
	           	  </div>
	           	  <div class="components">
	           	  	 <label>Write Something About Your Hotel </label>
	           	  	 <input type="text" name="about_h" placeholder="<?php echo($err_aboutH); ?>">
	           	  </div>
	           	  <input type="submit" name="submit" value="save">
                 <?php
                    if (isset($_POST["submit"])) {
                    header("Location: home.php");
                  }
                 ?>
	           </div>
	        </div>
		</form>
	</body>
</html>