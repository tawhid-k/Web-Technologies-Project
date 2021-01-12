<?php 
   require_once 'Models/database.php';
    $category = $_GET["operation"];
    if ($category == "detail") {
    	$data = getResult("select * from agency");
	    echo '<table> <tr> <td> <u> Name </u> </td> <td> <u> Username </u> </td> 
	    <td> <u> Email </u>  </td> <td> <u> Phone </u> </td> <td> <u> Location </u> </td> </tr>';
	    foreach ($data as $i) {
	       echo '<tr> <td>'.$i["name"].'</td> <td>'.$i["username"].'</td>
	       <td>'.$i["email"].'</td> <td>'.$i["phn"].'</td> <td>'.$i["location"].'</td> </tr>';
	    }
	    echo '</table>';
    }
    else if ($category == "add") {
        echo '
          <form action="" method="post" onsubmit="return add_admin_Agency()">
				<table>
					<tr>
						<td> Name: </td>
						<td> <input type="text" id="name" name="name"> </td>
						<td> <span id="err_name"></span> </td>
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
						<td> Phone: </b></td>
						<td> <input type="text" id="number" name="phn"> </td>
						<td> <span id="err_phn"></span> </td>
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
						<td> Password: </b></td>
						<td> <input type="Password" id="pass" name="pass"> </td>
						<td> <span id="err_pass"></span> </td>
					</tr>
					<tr>
						<td> Confirm Password: </b></td>
						<td> <input type="Password" id="cpass"> </td>
						<td> <span id="err_cpass"></span> </td>
					</tr>
					<tr>
						<td colspan="2" align="right">
							<input type="submit" name="register_agency" value="register">
						</td>
					</tr>
				</table>
			</form>
        ';
    }
    else if ($category == "update") {
    	echo '<input type="text" size="80" style="position:absolute; left: 45%; top: 20%;" placeholder="search.." 
    	onkeyup="admin_search_agency(this)">';
        echo '<div id="fill-table"> </div>';
    }
    else if ($category == "remove") {
    	$data = getResult("select * from agency");
	    echo '<table> <tr> <td> <u> Name </u> </td> <td> <u> Username </u> </td> 
	    <td> <u> Email </u>  </td> <td> <u> Delete </u> </td> </tr>';
	    foreach ($data as $i) {
	       echo '<tr> <td>'.$i["name"].'</td> <td>'.$i["username"].'</td>
	       <td>'.$i["email"].'</td> <td><a href="php/admin_delete_agency.php? username='.$i["username"].'"> delete </a></td> </tr>';
	    }
	    echo '</table>';
    }
?>