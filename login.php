<?php
error_reporting(0);
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
<title>University Technical Help Desk Portal</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>Sign in below</h1>
<form method = "POST" action = "welcome.php">
<label>User name</label> <br>
<input type = "text" name = "user" id = "user" required> <br>
<label>Password</label> <br>
<input type = "password" name = "password" id = "password" required> <br>
<input type = "submit" value = "Sign In" onclick="creds()">
</form>
<footer>
<?php
echo "<footer>Copyright © " . date("Y") . "</footer>";
?>
</footer>
<script src = "scripts.js"></script>
</body>
</html>