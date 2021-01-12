<?php 
    require_once 'Models/database.php';
    $uname = $_GET["username"];
    if ($uname == "") {
       echo '
            <tr>
				<td> First name: </td>
				<td> <input type="text" id="fname" name="fname"> </td>
				<td> <span id="err_fname"></span> </td>
			</tr>
			<tr>
				<td> Last name: </b></td>
				<td> <input type="text" id="lname" name="lname"> </td>
				<td> <span id="err_lname"></span> </td>
			</tr>
			<tr>
				<td> Username: </b></td>
				<td> <input type="text" id="uname" name="uname"> </td>
				<td> <span id="err_uname"></span> </td>
			</tr>
			<tr>
				<td> Email: </b></td>
				<td> <input type="text" id="email" name="email"> </td>
				<td> <span id="err_email"></span> </td>
			</tr>
			<tr>
				<td> Password: </b></td>
				<td> <input type="Password" id="pass" name="pass"> </td>
				<td> <span id="err_pass"></span> </td>
			</tr>
			<tr>
				<td> Confirm Password: </b></td>
				<td> <input type="Password" id="cpass"> </td>
				<td> <span id="err_cpass"></span> </td>
			</tr>
       ';
    }
    else {
    	
    }
?>