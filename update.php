<?php
error_reporting(0);
require "Classes.php";
require "session.php";

//check if $_POST is set
if (isset($_POST)) {
$update = htmlspecialchars($_POST['update']);
$id = htmlspecialchars($_POST['id']);
}
else {
//send the user back to viewing issues
header("Location: admin.php");
}

if ($update == "y") {
//set variable to update status to no
$newStatus = "n";
}
elseif ($update == "n") {
//set variable to switch to yes
$newStatus = "y";
}

//update status
$updateStatus = new ops();
$updateStatus->update($id, $newStatus);

//set messages for appropriate updates
if ($newStatus == "y") {
echo "<script> alert('Thank you for fixing this issue! You rock!') </script>";
}
elseif ($newStatus == "n") {
echo "<script> alert('This issue has been moved back to the unresolved list. Please reach out to your Technical Lead if you need assistance.') </script>";
}

include "admin.php";

?>