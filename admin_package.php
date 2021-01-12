<?php 
   require_once 'Models/database.php';
    $category = $_GET["operation"];
    if ($category == "detail") {
    	$data = getResult("select * from package");
	    echo '<table> <tr> <td> <u> Package id </u> </td> <td> <u> Agency </u> </td> <td> <u> Hotel </u> </td> 
	    <td> <u> location </u>  </td> <td> <u> image </u> </td> <td> <u> Tourist spots </u> </td> </tr>';
	    foreach ($data as $i) {
	       echo '<tr> <td>'.$i["package_no"].'</td> <td>'.$i["agency_name"].'</td> <td>'.$i["hotel_name"].'</td>
	       <td>'.$i["location"].'</td> <td> <img src="'.$i["img"].'" width="120px" height="100px"></td> <td>'.$i["spots"].'</td> </tr>';
	    }
	    echo '</table>';
    }
    else if ($category == "add") {
        $hotel = getResult("select username from hotel");
        $agency = getResult("select username from agency");
        echo '
          <form action="" method="post" enctype="multipart/form-data">
				<table>
					<tr>
						<td> Agency name: </td>
						<td> 
                            <select name="a_name">';
                            foreach ($agency as $i) {
                              echo "<option> ".$i["username"]." </option>";
                            }
                            echo '</select>
						</td>
					</tr>
					<tr>
						<td> Hotel name: </td>
						<td> 
                            <select name="h_name">';
                            foreach ($hotel as $i) {
                              echo "<option> ".$i["username"]." </option>";
                            }
                            echo '</select>
						</td>
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
	                </tr>
	                <tr>
	                   <td>  Picture:  </td>
	                   <td> <input type="file" name="Picture" size="50"> </td>
	                </tr>
	                <tr>
						<td> Tourist spots: </b></td>
						<td> <input type="text" name="tour_spot"> </td>
					</tr>
					<tr>
	                   <td>  Description:  </td>
	                   <td> <textarea name="description"> </textarea> </td>
	                </tr>
	                <tr>
                       <td> <input type="submit" name="add_info" value="add"> </td>
	                </tr>
				</table>
			</form>
        ';
    }
    else if ($category == "update") {
    	echo '<input type="text" size="80" style="position:absolute; left: 45%; top: 20%;" placeholder="search.." 
    	onkeyup="admin_search_package(this)">';
        echo '<div id="fill-table"> </div>';
    }
    else if ($category == "remove") {
    	$data = getResult("select * from package");
	    echo '<table> <tr> <td> <u> Package no </u> </td> <td> <u> Agency name </u> </td> 
	    <td> <u> Hotel name </u>  </td> <td> <u> Location </u> </td> <td> <u> Delete </u> </td> </tr>';
	    foreach ($data as $i) {
	       echo '<tr> <td>'.$i["package_no"].'</td> <td>'.$i["agency_name"].'</td>
	       <td>'.$i["hotel_name"].'</td> <td> '.$i["location"].'</td>
	       <td><a href="php/admin_delete_package.php? number='.$i["package_no"].'"> delete </a></td> </tr>';
	    }
	    echo '</table>';
    }
?>