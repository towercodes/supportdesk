<?php
error_reporting(0);
require "Classes.php";

//retrieve form input
if (isset($_POST)) {
$name = trim(htmlspecialchars($_POST['name']));
$email = trim(htmlspecialchars(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)));
$location = trim(htmlspecialchars($_POST['locale']));
$issue = trim(htmlspecialchars($_POST['issue']));

//send input to database
$add = new ops();
$add->report($name, $email, $location, $issue);

echo "<script> alert('Thank you for reporting. A technician will shortly reach out') </script>";
include "index.html";
}
else {
Echo "Oops. We were unable to process your report. Please try again.";
include "index.html";
}

?>