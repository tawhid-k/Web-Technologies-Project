<html>
<head>
    <title>Place Description</title>
    <link rel="stylesheet" type="text/css" href="css/hotel.css">
</head>
<body>
    <div class="image"></div>
    <div class="description">
        <?php 
           require_once 'php/home_clicks.php';
           $h_uname = $_GET["h_uname"];
           $data = get_hotel_info($h_uname);
           $more_data = get_more_hotel_info($h_uname);
           //$hotel = get_hotel_name($data);
           //$cost = cost_per_person($data);
           echo '
                <style>
                   .image { background-image: url('.$more_data[0]["img"].'); }
                </style>
                <table>
                    <tr>
                        <td>
                            <label>Hotel name:</label>
                        </td>
                        <td>
                            <label>'.$data[0]["name"].'</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Address:</label>
                        </td>
                        <td>
                            <label> '.$data[0]["address"].' </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Available rooms:</label>
                        </td>
                        <td>
                            <label> Yes </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Cost per night:</label>
                        </td>
                        <td>
                            <label> '.$more_data[0]["cost"]. ' ('.$more_data[0]["room_type"].')' .' </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Meal:</label>
                        </td>
                        <td>
                            <label> '.$more_data[0]["meal"].' </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Description: &nbsp &nbsp &nbsp &nbsp</label>
                        </td>
                        <td>
                            <label> '.$more_data[0]["des"].' </label>
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