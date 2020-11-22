<?php
   $places = array("Green Travelers", "Best Travel", "Share Trip", "Holiday Club Tours", "Best Trip", "International Travel Corpo",
                  "Bangladesh Tours");
   $numbers = array("+657849", "+659086", "+639487", "+652837", "+651243", "+653422", "+653489");
   $locations = array("Bandarban", "Sylhet, Rangamati", "Khulna, Bandarban", "Cox-Bazar", "Rangamati", "Sundarban", "Kuakata");
?>
<html>
<head>
	<title>agencies</title>
	<link rel="stylesheet" type="text/css" href="css/agencies.css">
</head>
<body>
    <div class="list-box">
    	<table>
    		<tr>
    			<td align="center" style="text-decoration: underline;">
    				Agency Names
    			</td>
    			<td align="center" style="text-decoration: underline;">
    				Contact Number
    			</td>
    			<td align="center" style="text-decoration: underline;">
    				Location
    			</td>
    		</tr>
    		<?php
               for ($i=0; $i<7; $i++) {
               	 echo '
                    <tr>
                       <td align="center">
                          '; echo $places[$i]; echo '
                       </td>
                       <td align="center">
                          '; echo $numbers[$i]; echo '
                       </td>
                       <td align="center">
                          '; echo $locations[$i]; echo '
                       </td>
                    </tr>
               	 ';
               }
    		?>
    	</table>
    </div>
</body>
</html>