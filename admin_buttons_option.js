function showUserDetails () {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("data").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "admin_user.php? operation=detail", true);
	xhr.send();
}
function addUser() {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("data").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "admin_user.php? operation=add", true);
	xhr.send();
}
function updateUser() {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("data").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "admin_user.php? operation=update", true);
	xhr.send();
}
function admin_search_client(typed_name) {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("data").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "admin_search_client.php? username="+typed_name.value, true);
	xhr.send();
}
function removeUser() {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("data").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "admin_user.php? operation=remove", true);
	xhr.send();
}       
function showAgencyDetails() {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("data").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "admin_agency.php? operation=detail", true);
	xhr.send();
}    
function addAgency() {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("data").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "admin_agency.php? operation=add", true);
	xhr.send();
}        
function updateAgency() {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("data").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "admin_agency.php? operation=update", true);
	xhr.send();
} 
function admin_search_agency(typed_name) {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("data").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "admin_search_agency.php? username="+typed_name.value, true);
	xhr.send();
}
function removeAgency() {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("data").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "admin_agency.php? operation=remove", true);
	xhr.send();
}   
function showHotelDetails() {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("data").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "admin_hotel.php? operation=detail", true);
	xhr.send();
}  
function addHotel() {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("data").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "admin_hotel.php? operation=add", true);
	xhr.send();
} 
function updateHotel() {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("data").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "admin_hotel.php? operation=update", true);
	xhr.send();
}
function admin_search_hotel(typed_name) {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("data").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "admin_search_hotel.php? username="+typed_name.value, true);
	xhr.send();
}
function removeHotel() {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("data").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "admin_hotel.php? operation=remove", true);
	xhr.send();
}
function showPackageDetails() {
    var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("data").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "admin_package.php? operation=detail", true);
	xhr.send();
}
function addPackage() {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("data").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "admin_package.php? operation=add", true);
	xhr.send();
}
function updatePackage() {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("data").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "admin_package.php? operation=update", true);
	xhr.send();
}
function admin_search_package(typed_name) {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("data").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "admin_search_package.php? number="+typed_name.value, true);
	xhr.send();
}
function removePackage() {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("data").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "admin_package.php? operation=remove", true);
	xhr.send();
}

                    /*<div id="fill-table">
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
					</tr>*/