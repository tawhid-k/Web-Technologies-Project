<?php 
    require_once 'Models/database.php';
    $uname = $_GET["username"];
    $data = getResult("select * from client where username like '%$uname%'");
    echo'
        <input type="text" size="80" style="position:absolute; left: 45%; top: 20%;"
        value="'.$uname.'" placeholder="search.." onkeyup="admin_search_client(this)">
        <form action="" method="post" onsubmit="return addClient()">
				<table>
					<tr>
						<td> First name: </td>
						<td> <input type="text" id="fname" size="60" name="fname" value="'.$data[0]["first_name"].'"> </td>
						<td> <span id="err_fname"></span> </td>
					</tr>
					<tr>
						<td> Last name: </b></td>
						<td> <input type="text" id="lname" size="60" name="lname" value="'.$data[0]["last_name"].'"> </td>
						<td> <span id="err_lname"></span> </td>
					</tr>
					<tr>
						<td> Username: </b></td>
						<td> <input type="text" id="uname" size="60" name="uname" value="'.$data[0]["username"].'"> </td>
						<td> <span id="err_uname"></span> </td>
					</tr>
					<tr>
						<td> Email: </b></td>
						<td> <input type="text" id="email" size="60" name="email" value="'.$data[0]["email"].'"> </td>
						<td> <span id="err_email"></span> </td>
					</tr>
					<tr>
						<td> Password: </b></td>
						<td> <input type="Password" id="pass" size="60" name="pass" value="'.$data[0]["password"].'"> </td>
						<td> <span id="err_pass"></span> </td>
					</tr>
					<tr>
						<td> Confirm Password: </b></td>
						<td> <input type="Password" id="cpass" size="60" value="'.$data[0]["password"].'"> </td>
						<td> <span id="err_cpass"></span> </td>
					</tr>
					<tr>
						<td colspan="2" align="right">
							<input type="submit" name="update_client" value="update">
						</td>
					</tr>
				</table>
         </form>';
?>