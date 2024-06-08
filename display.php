<?php
error_reporting(0);
require "Classes.php";
require "session.php";

//check if an option was selected
if (isset($_POST['option'])) {
$option = trim(htmlspecialchars($_POST['option']));
}
else {
//send the user back to the admin panel
header("Location: admin.php");
exit();
}

//display all issues
$display = new ops();
if ($option == "all") {
include "admin.php";
echo "<h1>All reported issues</h1>";
$display->display();
}
elseif ($option == "yes") {
//show resolved issues
include "admin.php";
echo "<h1>Resolved Issues</h1>";
$display->filterIssues("y");
}
elseif ($option == "no") {
//show unresolved issues
include "admin.php";
echo "<h1>Issues requiring your immediate attention</h1>";
$display->filterIssues("n");
}
else {
include "admin.php";
}

echo "<footer>Copyright © " . date("Y") . "</footer>";
?>