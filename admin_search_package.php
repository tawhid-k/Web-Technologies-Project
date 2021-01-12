<?php 
    require_once 'Models/database.php';
    $p_no = $_GET["number"];
    $data = getResult("select * from package where package_no = $p_no");
    $hotel = getResult("select username from hotel");
    $agency = getResult("select username from agency");
    if (count($data) == 0) echo "<table><tr><td>No such packages</td></tr></table>";
    else echo '
       <input type="text" size="80" style="position:absolute; left: 45%; top: 20%;" placeholder="search.." 
       onkeyup="admin_search_package(this)" value="'.$p_no.'">
          <form action="" method="post" enctype="multipart/form-data">
				<table>
				    <tr>
						<td> Package no: </td>
						<td> <input type="text" name="no" value="'.$data[0]["package_no"].'"> </td>
					</tr>
					<tr>
						<td> Agency name: </td>
						<td> 
                            <select name="a_name">
                            <option> '.$data[0]["agency_name"].' </option>';
                            foreach ($agency as $i) {
                              echo "<option> ".$i["username"]." </option>";
                            }
                            echo '</select>
						</td>
					</tr>
					<tr>
						<td> Hotel name: </td>
						<td> 
                            <select name="h_name">
                            <option> '.$data[0]["hotel_name"].' </option>';
                            foreach ($hotel as $i) {
                              echo "<option> ".$i["username"]." </option>";
                            }
                            echo '</select>
						</td>
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
	                </tr>
	                <tr>
	                   <td>  Picture:  </td>
	                   <td> <input type="file" name="Picture" size="50" value="'.$data[0]["img"].'"> </td>
	                </tr>
	                <tr>
						<td> Tourist spots: </td>
						<td> <input type="text" name="tour_spot" value="'.$data[0]["spots"].'"> </td>
					</tr>
					<tr>
	                   <td>  Description:  </td>
	                   <td> <textarea name="description" value="'.$data[0]["des"].'"> </textarea> </td>
	                </tr>
	                <tr>
                       <td> <input type="submit" name="update_package" value="add"> </td>
	                </tr>
				</table>
			</form>
    ';
?>