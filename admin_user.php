<?php
    require_once 'Models/database.php';
    $category = $_GET["operation"];
    if ($category == "detail") {
    	$data = getResult("select * from client");
	    echo '<table> <tr> <td> <u> Firstname </u> </td> <td> <u> Lastname </u> </td> 
	    <td> <u> Username </u>  </td> <td> <u> Email </u> </td> </tr>';
	    foreach ($data as $i) {
	       echo '<tr> <td>'.$i["first_name"].'</td> <td>'.$i["last_name"].'</td>
	       <td>'.$i["username"].'</td> <td>'.$i["email"].'</td> </tr>';
	    }
	    echo '</table>';
    }
    else if ($category == "add") {
        echo '
          <form action="" method="post" onsubmit="return addClient()">
				<table>
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
					<tr>
						<td colspan="2" align="right">
							<input type="submit" name="register_client" value="register">
						</td>
					</tr>
				</table>
			</form>
        ';
    }
    else if ($category == "update") {
    	echo '<input type="text" size="80" style="position:absolute; left: 45%; top: 20%;" placeholder="search.." 
    	onkeyup="admin_search_client(this)">';
        echo '<div id="fill-table"> </div>';
        /*echo '<form action="" method="post" onsubmit="return addClient()">
				<table>
				    <tr>
				        <td colspan="3"> <input type="text" name="search" 
				        placeholder="search.." size="80"> </td>
				    </tr>
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
					<tr>
						<td colspan="2" align="right">
							<input type="submit" name="update_client" value="update">
						</td>
					</tr>
				</table>
			</form>
        ';	*/
    }
    else if ($category == "remove") {
    	$data = getResult("select * from client");
	    echo '<table> <tr> <td> <u> Firstname </u> </td> <td> <u> Lastname </u> </td> 
	    <td> <u> Username </u>  </td> <td> <u> Email </u> </td> <td> <u> Delete </u> </td> </tr>';
	    foreach ($data as $i) {
	       echo '<tr> <td>'.$i["first_name"].'</td> <td>'.$i["last_name"].'</td>
	       <td>'.$i["username"].'</td> <td>'.$i["email"].'</td> <td> 
	       <a href="php/admin_delete_client.php? username='.$i["username"].'"> delete </a> </td> </tr>';
	    }
	    echo '</table>';
    }
?>