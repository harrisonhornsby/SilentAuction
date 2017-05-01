<?php
$servername = "db98a.pair.com";
$username = "1033872_5_w";
$password = "puZBpviF";
$dbname = "harrisonhornsby_silentauction2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
