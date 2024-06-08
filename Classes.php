<?php
error_reporting(0);
//function to log into database
class ops {
protected $pdo;

//create function for logging into database
protected function me() {
$host = '';
$dbname = '';
$username = '';
$password = '';

try {
    $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set PDO to throw exceptions for errors
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
}

//report submission
function report($name, $email, $location, $issue) {
//connect to the database
$this->me();
//sql query
$register = "INSERT INTO reports (name, email, location, issue) VALUES(:name, :email, :location, :issue)";
$vals = $this->pdo->prepare($register);
$vals->bindParam(":name", $name);
$vals->bindParam(":email", $email);
$vals->bindParam(":location", $location);
$vals->bindParam(":issue", $issue);
$vals->execute();
}

//retrieve all reports
function display() {
//log into database
$this->me();
$bugs = "SELECT * FROM reports";
$query = $this->pdo->query($bugs);
$results = $query->fetchAll(PDO::FETCH_ASSOC);
//display results
foreach ($results as $showBugs) {
echo "<h2> {{$showBugs['name']} </h2>
<p> Reported via {$showBugs['email']} </p>
<blockquote> {$showBugs['issue']} </blockquote>
<p> Worked on? {$showBugs['complete']} </p>";
}
}

//retrieve by status
function filterIssues($status) {
//log into database
$this->me();
$bugs = "SELECT * FROM reports WHERE complete = :status";
$query = $this->pdo->prepare($bugs);
$query->bindParam(":status", $status);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
//display results
foreach ($results as $showBugs) {
echo "<h2> {{$showBugs['name']} </h2>
<p> Reported via {$showBugs['email']} </p>
<blockquote> {$showBugs['issue']} </blockquote>
<p> Worked on? {$showBugs['complete']} </p>
<form action = 'update.php' method = 'POST'>
<input type = 'text' name = 'id' value = {$showBugs['id']} hidden>
<input type = 'text' name = 'update' value = {$showBugs['complete']} hidden>
<input type = 'submit' value = 'update'>
</form>";
}
if(count($results) <1) {
echo "Nothing to see for now.";
}
}

//update status
function update($id, $status) {
//log into database
$this->me();
$change = "UPDATE reports SET `complete` = :status WHERE id = :id";
$update = $this->pdo->prepare($change);
$update->bindParam(":id", $id);
$update->bindParam(":status", $status);
$update->execute();
}
}

?>	