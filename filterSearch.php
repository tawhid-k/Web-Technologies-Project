<?php
   $err_msg = array_fill(0, 4, "");
   function check_error ($index, $value) {
   	 global $err_msg;
   	 if (empty($_POST[$index])) {
   	   $err_msg[$value] = "&nbsprequired*";
   	 }
   	 else if (($index == "days" || $index == "people") && !is_numeric($_POST["$index"])) {
       $err_msg[$value] = "[The field must contain a numeric value]";
   	 }
   }
   if (isset($_POST["submit"])) {
   	 check_error("type", 0);
     check_error("days", 1);
     check_error("people", 2);
     if (!isset($_POST["guide"])) {
       $err_msg[3] = "required*";
     }
   }
?>

<html>
<head>
	<title>
		Filter Search
	</title>
	<link rel="stylesheet" type="text/css" href="css/filterSearch.css">
</head>
<body>
	<fieldset>
		<form action="" method="post">
			<h1 align="center">
				Filter Search
			</h1>
			<table align="center">
				<tr>
					<td>
						<label>Enter you destination place</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="destination" placeholder="Srimangle, Sylhet" size="50">
					</td>
				</tr>
				<tr>
					<td>
						<label>Select the type of place you want to travel</label>
					</td>
				</tr>
				<tr>
					<td>
						<select style="width: 355px" name="type">
							<option selected="selected" disabled="disabled">Specify your interest</option>
							<option> Natural Beauty </option>
							<option> Cultural Diversity </option>
							<option> Traditional Varities </option>
							<option> Sea Beach </option>
							<option> Forests </option>
							<option> Hilly region </option>
						</select>
						<span>
							<?php
                               echo '<label style="color: red;">'; echo $err_msg[0]; echo'</label>';
							?>
						</span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Enter the number of days you want to stay</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="days" placeholder="1 / 2 / 3 / 4 / 5 / 6 / 7" size="50">
						<span>
							<?php
                               echo '<label style="color: red;">'; echo $err_msg[1]; echo'</label>';
							?>
						</span>
					</td>
				</tr>
				<tr>
					<td>
						<label>How many of you want to travel?</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="people" placeholder="1 / 2 / 3 / 4 / 5 / 6 / 7" size="50">
						<span>
							<?php
                               echo '<label style="color: red;">'; echo $err_msg[2]; echo'</label>'; 
							?>
						</span>
					</td>
				</tr>
				<tr>
					<td>
						<label>Do you need any tourist guide?</label>
					</td>
				</tr>
				<tr>
					<td style="font-size: 18px;">
						<input type="radio" name="guide"> Yes
						<input type="radio" name="guide"> No
						<span>
							<?php
                               for ($i = 0; $i < 69; $i++) {
                               	 echo "&nbsp";
                               }
                               echo '<label style="color: red;">'; echo $err_msg[3]; echo'</label>';
							?>
						</span>
					</td>
				</tr>
				<tr>
					<td>
						<label>What is your expected range of budget for this trip?</label>
					</td>
				</tr>
				<tr>
					<td>
						From &nbsp
						<select style="width: 135px">
							<option disabled="disabled" selected="selected"> 30, 000 BDT </option>
							<?php
                              for ($i = 5000; $i <= 100000; $i += 5000) {
                              	 echo "<option> $i </option>";
                              }
							?>
						</select>
						&nbsp To &nbsp 
						<select style="width: 135px">
							<option disabled="disabled" selected="selected"> 30, 000 BDT </option>
							<?php
                              for ($i = 5000; $i <= 100000; $i += 5000) {
                              	 echo "<option> $i </option>";
                              }
							?>
						</select> 
					</td>
				</tr>
				<tr align="center">
					<td>
						<input type="submit" name="submit">
					</td>
				</tr>
			</table>
		</form>
	</fieldset>
</body>
</html>