<?php
/**
 * Author: Bryan Moore dkkkkkkkkkkkk adfad
 */
include 'dbconfigSilentAuction.php'; //Configure and create DB connection

$description = $_POST["description"];

$stmt = $conn->prepare("INSERT INTO `Category` (`description`) VALUES (?)");
$stmt->bind_param("s", $description);

$stmt->execute();
$conn->close();
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>