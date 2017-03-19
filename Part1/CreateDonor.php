<?php
/**
 * Created by PhpStorm.
 * User: Harrison_2
 * Date: 3/17/2017
 * Time: 3:39 PM
 */
include 'dbconfigSilentAuction.php'; //Configure and create DB connection

$businessName = $_POST["businessName"];
$contactName = $_POST["contactName"];
$contactEmail = $_POST["contactEmail"];
$contactTitle = $_POST["contactTitle"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];

$stmt = $conn->prepare("INSERT INTO `Donors` (`Id`, `BusinessName`, `ContactName`, `ContactEmail`, `ContactTitle`, `Address`, `City`, `State`, `ZipCode`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $businessName, $contactName, $contactEmail, $contactTitle, $address, $city, $state, $zip);


$stmt->execute();
$conn->close();
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>