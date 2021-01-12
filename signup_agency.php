<?php require_once'php/signup_agency_db.php' ?>
<html>
<head>
	<title>Signup</title>
</head>
<body>
	<h1 align="center">Signup</h1>
    <form action="" onsubmit="return validate()" method="post">
    	<table align="center">
    		<tr>
    			<td> <label>Name:</label> </td>
    			<td> <input type="text" id="name" name="name"> </td>
    			<td id="err_name"> </td>
    		</tr>
            <tr>
                <td> <label>Username:</label> </td>
                <td> <input type="text" id="uname" name="uname"> </td>
                <td id="err_uname"> </td>
            </tr>
    		<tr>
    			<td> <label>Email:</label> </td>
    			<td> <input type="text" id="email" name="email"> </td>
    			<td id="err_email">  </td>
    		</tr>
    		<tr>
    			<td> <label>Contact Number:</label> </td>
    			<td> <input type="text" id="number" name="number"> </td>
    			<td id="err_phn"></td>
    		</tr>
    		<tr>
    			<td> <label>Location:</label> </td>
    			<td> <select id="lctn" name="location">
    				<option disabled="disabled" selected="selected">Select a Location</option>
    				<option>Barisal</option>
    				<option>Khulna</option>
    				<option>Rajshahi</option>
    				<option>Rangpur</option>
    				<option>Chittagong</option>
    				<option>Sylhet</option>
    				<option>Dhaka</option>
    			</select> </td>
    			<td id="err_location"> </td>
    		</tr>
    		<tr>
    			<td> <label>Password:</label> </td>
    			<td> <input type="Password" id="pass" name="pass"> </td>
    			<td id="err_pass"> </td>
    		</tr>
    		<tr>
    			<td colspan="2" align="center"> <input type="submit" name="signup"> </td>
    		</tr>
    	</table>
    </form>
    <script src="agency_validation.js"></script>
</body>
</html>