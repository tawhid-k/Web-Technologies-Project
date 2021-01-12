<?php 
    require_once 'Models/database.php';
    $uname = $_GET["username"]; 
    $data = getResult("select * from agency where username like '%$uname%'");
    if (count($data) == 0) echo "<table><tr><td>No such agency</td></tr></table>";
    else echo '
       <input type="text" size="80" style="position:absolute; left: 45%; top: 20%;" placeholder="search.." 
       onkeyup="admin_search_agency(this)" value="'.$uname.'">
          <form action="" method="post" onsubmit="return add_admin_Agency()">
				<table>
					<tr>
						<td> Name: </td>
						<td> <input type="text" id="name" name="name" value="'.$data[0]["name"].'"> </td>
						<td> <span id="err_name"></span> </td>
					</tr>
					<tr>
						<td> Username: </b></td>
						<td> <input type="text" id="uname" name="uname" value="'.$data[0]["username"].'"> </td>
						<td> <span id="err_uname"></span> </td>
					</tr>
					<tr>
						<td> Email: </b></td>
						<td> <input type="text" id="email" name="email" value="'.$data[0]["email"].'"> </td>
						<td> <span id="err_email"></span> </td>
					</tr>
					<tr>
						<td> Phone: </b></td>
						<td> <input type="text" id="number" name="phn" value="'.$data[0]["phn"].'"> </td>
						<td> <span id="err_phn"></span> </td>
					</tr>
					<tr>
    			    <td> <label>Location:</label> </td>
    			    <td> <select id="lctn" name="location">
    				<option disabled="disabled" selected="selected">'.$data[0]["location"].'</option>
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
						<td> <input type="Password" id="pass" name="pass" value="'.$data[0]["password"].'"> </td>
						<td> <span id="err_pass"></span> </td>
					</tr>
					<tr>
						<td> Confirm Password: </b></td>
						<td> <input type="Password" id="cpass" value="'.$data[0]["password"].'"> </td>
						<td> <span id="err_cpass"></span> </td>
					</tr>
					<tr>
						<td colspan="2" align="right">
							<input type="submit" name="update_agency" value="update">
						</td>
					</tr>
				</table>
			</form>
    ';
?>