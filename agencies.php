<?php require "php/agenciesInfo.php" ?>
<html>
<head>
	<title>agencies</title>
	<link rel="stylesheet" type="text/css" href="css/agencies.css">
</head>
<body>
    <div class="list-box">
    <form action="" method="post">
    	<table>
    		<tr align="center">
    			<td  style="text-decoration: underline;">
    				Agency Names
    			</td>
    			<td  style="text-decoration: underline;">
    				Contact Number
    			</td>
    			<td  style="text-decoration: underline;">
    				Location
    			</td>
    		</tr>
    		<?php
    		   $cnt = 0;
               for ($i=$first_index; $i < $last_index; $i++, $cnt++) {
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
               while ($cnt < 7) {
               	 echo "<tr> <td></td><td></td><td></td> </tr>";
               	 $cnt++;
               }
    		?>
    	</table>
    	<input class="prev-btn" type="submit" name="prev" value="previous">
    	<input class="right-btn" type="submit" name="nxt" value="next">
    </form>
    </div>
</body>
</html>