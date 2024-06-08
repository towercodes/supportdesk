<?php
error_reporting(0);
session_start();

//log in
if(isset($_POST['user']) && isset($_POST['password'])) {
// Access the post variables
$user = $_POST['user'];
$password = $_POST['password'];

if ($user == "admin" && $password == "Admin.2024") {
//set session variable
$_SESSION["user"] = $user;
//send technicians to the admin view
header("Location: admin.php");
exit();
}
else {
echo "Incorrect credentials. Please try again.";
include "login.php";
}
}
?>