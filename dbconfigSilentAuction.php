<?php
$servername = "db78a.pair.com";
$username = "1033872_2";
$password = "redteam17";
$dbname = "harrisonhornsby_SilentAcutionSystemDb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
