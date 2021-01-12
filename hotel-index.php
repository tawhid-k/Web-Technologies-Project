<html>
<head>
	<title>hotel</title>
	<link rel="stylesheet" type="text/css" href="css/hotel-index.css">
</head>
<body>
    <div class="list-box">
    <form action="" method="post" enctype="multipart/form-data">
    	<table>
    		<?php
           require_once 'php/hotel-controller.php';
    		   $data = userInfo();
           if ($button_clicked == 0) {
             echo '
                <tr>
                   <td>  Hotel name:  </td>
                   <td colspan="3"> '.$data[0]["name"].' </td>
                </tr>
                <tr>
                   <td>  Username:  </td>
                   <td colspan="3"> '.$data[0]["username"].' </td>
                </tr>
                <tr>
                   <td>  Email:  </td>
                   <td colspan="3"> '.$data[0]["email"].' </td>
                </tr>
                <tr>
                   <td>  Contact number:  </td>
                   <td colspan="3"> '.$data[0]["phone"].' </td>
                </tr>
                <tr>
                   <td>  Address:  </td>
                   <td colspan="3"> '.$data[0]["address"].' </td>
                </tr>
                <tr>
                    <td> <input type="submit" name="update" value="update"> </td>
                    <td> <input type="submit" name="delete" value="delete"> </td>
                    <td> <input type="submit" name="add_info" value="add info"> </td>
                    <td> <input type="submit" name="logout" value="logout"> </td>
                </tr>
             '; 
           }
           else if ($button_clicked == 1) {
              echo '
                <tr>
                   <td>  Hotel name:  </td>
                   <td> <input type="text" name="name" value="'.$data[0]["name"].'""> </td>
                </tr>
                <tr>
                   <td>  Username:  </td>
                   <td> <input type="text" name="uname" value="'.$data[0]["username"].'""> </td>
                </tr>
                <tr>
                   <td>  Email:  </td>
                   <td> <input type="text" name="email" value="'.$data[0]["email"].'""> </td>
                </tr>
                <tr>
                   <td>  Phone:  </td>
                   <td> <input type="text" name="phn" value="'.$data[0]["phone"].'""> </td>
                </tr>
                <tr>
                   <td>  Address:  </td>
                   <td> <input type="text" name="address" value="'.$data[0]["address"].'""> </td>
                </tr>
                <tr>
                   <td>  Password:  </td>
                   <td> <input type="text" name="pass" value="'.$data[0]["password"].'""> </td>
                </tr>
                <tr>
                    <td> <input type="submit" name="confirm_update" value="update"> </td>
                    <td> <input type="submit" name="logout" value="logout"> </td>
                </tr>
             '; 
           }
           else if ($button_clicked == 2) {
             echo '
                <tr>
                   <td>  Room type:  </td>
                   <td> <input type="text" name="room" size="50"> </td>
                </tr>
                <tr>
                   <td>  Cost per night:  </td>
                   <td> 
                      <select name="cost">';
                      for ($i = 5000; $i <= 20000; $i+=1000) {
                        echo "<option> $i </option>";
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
                   <td>  Meal:  </td>
                   <td> <input type="text" name="meal" size="50"> </td>
                </tr>
                <tr>
                   <td>  Picture:  </td>
                   <td> <input type="file" name="img" size="50"> </td>
                </tr>
                <tr>
                   <td>  Description:  </td>
                   <td> <textarea name="desc"> </textarea> </td>
                </tr>
                <tr>
                    <td> <input type="submit" name="add_change" value="add"> </td>
                    <td> <input type="submit" name="logout" value="logout"> </td>
                </tr>
             '; 
           }
    		?>
    	</table>
    </form>
    </div>
</body>
</html>

