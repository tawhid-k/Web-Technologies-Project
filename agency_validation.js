function get(i) {
   return document.getElementById(i);
}
function value(i) {
   return get(i).value;
}
function validate() {
   has_error = false;
   name = value("name");
   uname = value("uname");
   email = value("email");
   number = value("number");
   lctn = value("lctn");
   password = value("pass");
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
   return !has_error;
}