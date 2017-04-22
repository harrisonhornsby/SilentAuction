<?php
/**
 * Author: Bryan Moore
 */
include 'dbconfigSilentAuction.php'; //Configure and create DB connection

$description = $_POST["description"];
$category = "1";

$stmt = $conn->prepare("INSERT INTO `Lot` (`description`, categoryId) VALUES (?, ?)");
$stmt->bind_param("si", $description, $category);

$stmt->execute();
$conn->close();
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>