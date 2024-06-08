<DOCTYPE html>
<html lang="en">
<head>
<title>Admin Panel</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
error_reporting(0);
//run session script
require "session.php";
?>
<img src = "https://upload.wikimedia.org/wikipedia/en/thumb/4/44/University_of_Sunderland_coat_of_arms.png/250px-University_of_Sunderland_coat_of_arms.png" alt = "Coat of arms that show the text: 'Scientiam Dulce Hauriens'">
<h3>Admin Panel</h3>
<form method = 'POST' action = 'display.php'>
<input type = 'text' name = 'option' value = 'all' hidden>
<input type = 'submit' value = 'View both resolved and unresolved issues - \(This is for QA purposes, and you will not be able to update issues here\)'>
</form>
<form method = 'POST' action = 'display.php'>
<input type = 'text' name = 'option' value = 'yes' hidden>
<input type = 'submit' value = 'View resolved issues'>
</form>
<form method = 'POST' action = 'display.php'>
<input type = 'text' name = 'option' value = 'no' hidden>
<input type = 'submit' value = 'View unresolved issues'>
</form>
<a href = "login.php">Log out</a>
</body>
</html>