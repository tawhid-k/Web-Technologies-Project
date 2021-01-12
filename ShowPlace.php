<html>
<head>
	<title>Place Description</title>
	<link rel="stylesheet" type="text/css" href="css/ShowPlace.css">
</head>
<body>
    <div class="image"></div>
    <div class="description">
        <?php 
           require_once 'php/home_clicks.php';
           $package = $_GET["package_no"];
           $data = get_package_info($package);
           $agency = get_agency_name($data);
           $hotel = get_hotel_name($data);
           $cost = cost_per_person($data);
           echo '
                <style>
                   .image { background-image: url('.$data[0]["img"].'); }
                </style>
                <table>
                    <tr>
                        <td>
                            <label>Agency name:</label>
                        </td>
                        <td>
                            <label>'.$agency.'</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Tourist Attractions:</label>
                        </td>
                        <td>
                            <label> '.$data[0]["spots"].'</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Hotels:</label>
                        </td>
                        <td>
                            <a href="hotel.php?h_uname='.$data[0]["hotel_name"].'">'.$hotel.'</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Tourist Guide:
                        </td>
                        <td>
                            Yes
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Cost per person:</label>
                        </td>
                        <td>
                            <label>'.$cost.'</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Description: &nbsp &nbsp &nbsp &nbsp</label>
                        </td>
                        <td>
                            <label> '.$data[0]["des"].' </label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right">
                            <input type="submit" name="book" value="Book">
                        </td>
                    </tr>
                </table>

           ';
        ?>
    	
    </div>
</body>
</html>