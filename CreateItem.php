<?php
/**
 * Created by PhpStorm.
 * User: Harrison
 * Date: 3/17/2017
 * Time: 3:39 PM
 */
include 'dbconfigSilentAuction.php'; //Configure and create DB connection

$description = $_POST["description"];
$retailValue = $_POST["retailValue"];
$donorId = $_POST["donorId"];
$lotId = $_POST["lotId"];


$stmt = $conn->prepare("INSERT INTO `Items` (`description`, `retailValue`, `donorId`, lotId ) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sdii", $description, $retailValue, $donorId, $lotId );


$stmt->execute();
$conn->close();
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>