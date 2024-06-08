function formVal() {
//function to check if form fields are filled
function require(id) {
let val = document.getElementById(id).value;
//trim strings to make sure white spaces are not counted as characters, and then check if the field has been filled by looking at the number of characters the string has
if (val.trim().length < 1) {
alert (document.getElementById(id).name + " is empty.");
return false;
}
return true;
}

//make sure email has @
function emailCheck() {
let email = document.getElementById("email").value;
if (!email.includes("@")) {
alert ("Please enter a valid email address");
return false;
}
return true;
}

//make sure name field is filled out
require("name");

//check if email has @ which logically also takes care of whether the field is empty or not
emailCheck();

//make sure location is filled in
require("locale");

//make sure issue is filled in
require("issue");

return true;
}

//function to validate logging in
function creds() {
//get input
let user = document.getElementById("user").value;
let password = document.getElementById("password").value;
//check if fields are filled out
if (user.length <1 || password.length <1) {
alert ("Fields cannot be empty");
return false;
}
return true;
}

