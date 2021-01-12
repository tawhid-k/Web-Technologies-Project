<?php 
    require_once 'Models/database.php';
    $uname = $_GET["username"]; 
    $data = getResult("select * from hotel where username like '%$uname%'");
    if (count($data) == 0) echo "<table><tr><td>No such hotel</td></tr></table>";
    else echo '
       <input type="text" size="80" style="position:absolute; left: 45%; top: 20%;" placeholder="search.." 
       onkeyup="admin_search_hotel(this)" value="'.$uname.'">
          <form action="" method="post" onsubmit="return add_admin_Agency()">
				<table>
					<tr>
						<td> Hotel name: </td>
						<td> <input type="text" id="name" name="name" size="60" value="'.$data[0]["name"].'"> </td>
						<td> <span id="err_name"></span> </td>
					</tr>
					<tr>
						<td> Username: </b></td>
						<td> <input type="text" id="uname" name="uname" size="60" value="'.$data[0]["username"].'"> </td>
						<td> <span id="err_uname"></span> </td>
					</tr>
					<tr>
						<td> Address: </b></td>
						<td> <input type="text" id="address" name="address" size="60" value="'.$data[0]["address"].'"> </td>
						<td> <span id="err_email"></span> </td>
					</tr>
					<tr>
						<td> Email: </b></td>
						<td> <input type="text" id="email" name="email" size="60" value="'.$data[0]["email"].'"> </td>
						<td> <span id="err_email"></span> </td>
					</tr>
					<tr>
						<td> Phone: </b></td>
						<td> <input type="text" id="number" name="phn" size="60" value="'.$data[0]["phone"].'"> </td>
						<td> <span id="err_phn"></span> </td>
					</tr>
					<tr>
						<td> Password: </b></td>
						<td> <input type="Password" id="pass" name="pass" size="60" value="'.$data[0]["password"].'"> </td>
						<td> <span id="err_pass"></span> </td>
					</tr>
					<tr>
						<td> Confirm Password: </b></td>
						<td> <input type="Password" id="cpass" size="60" value="'.$data[0]["password"].'"> </td>
						<td> <span id="err_cpass"></span> </td>
					</tr>
					<tr>
						<td colspan="2" align="right">
							<input type="submit" name="update_hotel" value="update">
						</td>
					</tr>
				</table>
			</form>
    ';
?>