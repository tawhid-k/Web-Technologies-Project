function get(i) {
	return document.getElementById(i);
}
function value (i) {
	return get(i).value;
}
function addClient() {
    has_error = false;
    fname = value("fname");
    lname = value("lname");
    uname = value("uname");
    email = value("email");
    pass = value("pass");
    cpass = value("cpass");
    if (fname == "") {
       has_error = true;
       get("err_fname").innerHTML = "required*";
       get("err_fname").style.color = "red";
    }
    for (i = 0; i < fname.length; i++) {
       if (fname[i] >= '0' && fname[i] <= '9') {
       	   has_error = true;
	       get("err_fname").innerHTML = "Name cannot contain numeric values*";
	       get("err_fname").style.color = "red";
	       break;
       }
    }
    if (lname == "") {
       has_error = true;
       get("err_lname").innerHTML = "required*";
       get("err_lname").style.color = "red";
    }
    for (i = 0; i < lname.length; i++) {
       if (lname[i] >= '0' && lname[i] <= '9') {
       	   has_error = true;
	       get("err_lname").innerHTML = "Name cannot contain numeric values";
	       get("err_lname").style.color = "red";
	       break;
       }
    }
    if (uname == "") {
       has_error = true;
       get("err_uname").innerHTML = "required*";
       get("err_uname").style.color = "red";
    }
    for (i = 0; i < uname.length; i++) {
       if (uname[i] == ' ') {
       	   has_error = true;
	       get("err_uname").innerHTML = "Username cannot contain spaces";
	       get("err_uname").style.color = "red";
	       break;
       }
    }
    if (email == "") {
    	has_error = true;
    	get("err_email").innerHTML = "required*";
        get("err_email").style.color = "red";
    }
    else {
    	var email_format = false;
	    for (i = 0; i < email.length - 1; i++) {
	    	if (email[i] == '@') {
	    	   for (j = i + 1; j < email.length; j++) {
	    	   	  if (email[j] == '.') {
	    	   	  	 email_format = true;
	    	   	  }
	    	   }
	    	}
	    }
	    if (email_format == false) {
	      get("err_email").innerHTML = "Invalid email format";
          get("err_email").style.color = "red";
	      has_error = true;
	    }
    }
	    
    if (pass == "") {
      has_error = true;
      get("err_pass").innerHTML = "required*";
      get("err_pass").style.color = "red";
    }
    else if (pass.length < 5) {
      has_error = true;
      get("err_pass").innerHTML = "Passsword length should be at least 5 characters";
      get("err_pass").style.color = "red";
    }
    if (cpass == "") {
      has_error = true;
      get("err_cpass").innerHTML = "required*";
      get("err_cpass").style.color = "red";
    }
    else if (cpass != pass) {
      has_error = true;
      get("err_cpass").innerHTML = "Password does not match with confirm password";
      get("err_cpass").style.color = "red";
    }
    return !has_error;
}
function add_admin_Agency() {
   has_error = false;
   name = value("name");
   uname = value("uname");
   email = value("email");
   number = value("number");
   lctn = value("lctn");
   password = value("pass");
   cpass = value("cpass");
   if (name == "") {
      has_error = true;
      get("err_name").innerHTML = "required*";
      get("err_name").style.color = "red";
   }
   else for(i = 0; i < name.length; i++) {
      if (name[i] >= '0' && name[i] <= '9') {
         has_error = true;
         get("err_name").innerHTML = "Name should not contain any digits*";
         get("err_name").style.color = "red";
      }
   }
   if (uname == "") {
      has_error = true;
      get("err_uname").innerHTML = "required*";
      get("err_uname").style.color = "red";
   }
   else for(i = 0; i < uname.length; i++) {
      if (uname[i] == ' ') {
         has_error = true;
         get("err_uname").innerHTML = "Username should not contain spaces*";
         get("err_uname").style.color = "red";
      }
   }
   email_format = false;
   if (email == "") {
      has_error = true;
      get("err_email").innerHTML = "required*";
      get("err_email").style.color = "red";
   }
   else for (i = 0; i < email.length - 1; i++) {
      if (email[i] == '@') {
         for (j = i+1; j < email.length; j++) {
            if (email[j] == '.') {
              email_format = true;
              break;
            }
         }
      }
   }
   if (email_format == false) {
      has_error = true;
      if (email == "") get("err_email").innerHTML = "required*";
      else get("err_email").innerHTML = "Invalid email format";
      get("err_email").style.color = "red";
   }
   if (number == "") {
      has_error = true;
      get("err_phn").innerHTML = "required*";
      get("err_phn").style.color = "red";
   }
   else for (i = 0; i < number.length; i++) {
      if (!(number[i] >= '0' && number[i] <= '9') && !(number[i] == '+')) {
         has_error = true;
         get("err_phn").innerHTML = "Invalid number format";
         get("err_phn").style.color = "red";
      }
   }
   if (lctn == "Select a Location") {
      has_error = true;
      get("err_location").innerHTML = "Please select a specific location*";
      get("err_location").style.color = "red";
   }
   if (password == "") {
      has_error = true;
      get("err_pass").innerHTML = "required*";
      get("err_pass").style.color = "red";
   }
   else if (password.length < 5) {
      has_error = true;
      get("err_pass").innerHTML = "Password must be at least 5 characters long";
      get("err_pass").style.color = "red";
   }
   if (cpass == "") {
      has_error = true;
      get("err_cpass").innerHTML = "required*";
      get("err_cpass").style.color = "red";
    }
    else if (cpass != password) {
      has_error = true;
      get("err_cpass").innerHTML = "Password does not match with confirm password";
      get("err_cpass").style.color = "red";
    }
   return !has_error;
}
function add_admin_Hotel() {
   debugger;
   has_error = false;
   name = value("name");
   uname = value("uname");
   email = value("email");
   number = value("number");
   address = value("address");
   password = value("pass");
   cpass = value("cpass");
   if (name == "") {
      has_error = true;
      get("err_name").innerHTML = "required*";
      get("err_name").style.color = "red";
   }
   else for(i = 0; i < name.length; i++) {
      if (name[i] >= '0' && name[i] <= '9') {
         has_error = true;
         get("err_name").innerHTML = "Name should not contain any digits*";
         get("err_name").style.color = "red";
      }
   }
   if (uname == "") {
      has_error = true;
      get("err_uname").innerHTML = "required*";
      get("err_uname").style.color = "red";
   }
   else for(i = 0; i < uname.length; i++) {
      if (uname[i] == ' ') {
         has_error = true;
         get("err_uname").innerHTML = "Username should not contain spaces*";
         get("err_uname").style.color = "red";
      }
   }
   email_format = false;
   if (email == "") {
      has_error = true;
      get("err_email").innerHTML = "required*";
      get("err_email").style.color = "red";
   }
   else for (i = 0; i < email.length - 1; i++) {
      if (email[i] == '@') {
         for (j = i+1; j < email.length; j++) {
            if (email[j] == '.') {
              email_format = true;
              break;
            }
         }
      }
   }
   if (email_format == false) {
      has_error = true;
      if (email == "") get("err_email").innerHTML = "required*";
      else get("err_email").innerHTML = "Invalid email format";
      get("err_email").style.color = "red";
   }
   if (number == "") {
      has_error = true;
      get("err_phn").innerHTML = "required*";
      get("err_phn").style.color = "red";
   }
   else for (i = 0; i < number.length; i++) {
      if (!(number[i] >= '0' && number[i] <= '9') && !(number[i] == '+')) {
         has_error = true;
         get("err_phn").innerHTML = "Invalid number format";
         get("err_phn").style.color = "red";
      }
   }
   if (address == "") {
      has_error = true;
      get("err_address").innerHTML = "required*";
      get("err_address").style.color = "red";
   }
   if (password == "") {
      has_error = true;
      get("err_pass").innerHTML = "required*";
      get("err_pass").style.color = "red";
   }
   else if (password.length < 5) {
      has_error = true;
      get("err_pass").innerHTML = "Password must be at least 5 characters long";
      get("err_pass").style.color = "red";
   }
   if (cpass == "") {
      has_error = true;
      get("err_cpass").innerHTML = "required*";
      get("err_cpass").style.color = "red";
    }
    else if (cpass != password) {
      has_error = true;
      get("err_cpass").innerHTML = "Password does not match with confirm password";
      get("err_cpass").style.color = "red";
    }
   return !has_error;
}
function add_admin_Package() {
  return true;
}