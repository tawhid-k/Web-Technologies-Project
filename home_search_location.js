function searchLocation(place) {
	debugger;
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("container").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "home_search.php? place="+place.value, true);
	xhr.send();
}