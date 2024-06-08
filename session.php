<?php
error_reporting(0);
session_start();
if ($_SESSION["user"] != "admin") {
header("Location: login.php");
exit();
}
?>