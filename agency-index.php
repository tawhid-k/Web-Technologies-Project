<html>
<head>
  <title>agencies</title>
  <link rel="stylesheet" type="text/css" href="css/agency-index.css">
</head>
<body>
    <div class="list-box">
    <form action="" method="post" enctype="multipart/form-data">
      <table>
        <?php
           require_once 'php/agency-controller.php';
           $data = userInfo();
           $hotel= hotelNames();
           if ($button_clicked == 0) {
             echo '
                <tr>
                   <td>  Agency name:  </td>
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
                   <td colspan="3"> '.$data[0]["phn"].' </td>
                </tr>
                <tr>
                   <td>  Location:  </td>
                   <td colspan="3"> '.$data[0]["location"].' </td>
                </tr>
                <tr>
                    <td> <input type="submit" name="update" value="update"> </td>
                    <td> <input type="submit" name="delete" value="delete"> </td>
                    <td> <input type="submit" name="add_info" value="add package"> </td>
                    <td> <input type="submit" name="logout" value="logout"> </td>
                </tr>
             '; 
           }
            if ($button_clicked == 1) {
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
                   <td> <input type="text" name="phn" value="'.$data[0]["phn"].'""> </td>
                </tr>
                <tr>
                   <td>  Location:  </td>
                   <td> <input type="text" name="location" value="'.$data[0]["location"].'""> </td>
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
                   <td>  Hotel:  </td>
                   <td><select name="hotel">';
                    foreach ($hotel as $i) {
                      echo "<option>".$i["name"]."</option>";
                    }
                   echo '</select></td>
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
                   <td>  Tourist Spot:  </td>
                   <td> <input type="text" name="tour_spot" size="50"> </td>
                </tr>
                <tr>
                   <td>  Picture:  </td>
                   <td> <input type="file" name="Picture" size="50"> </td>
                </tr>
                <tr>
                   <td>  Place type:  </td>
                   <td> 
                    <select style="width: 355px" name="type">
                      <option selected="selected" disabled="disabled">Specify your interest</option>
                      <option> Natural Beauty </option>
                      <option> Cultural Diversity </option>
                      <option> Traditional Varities </option>
                      <option> Sea Beach </option>
                      <option> Forests </option>
                      <option> Hilly region </option>
                    </select>
                   </td>
                </tr>
                <tr>
                   <td>  Description:  </td>
                   <td> <textarea name="description"> </textarea> </td>
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