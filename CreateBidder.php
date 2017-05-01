<?php
/**
 * Author: Bryan Moore
 */
include 'dbconfigSilentAuction.php'; //Configure and create DB connection

$Id = $_POST["Id"];
$name = $_POST["name"];
$address = $_POST["address"];
$cellNumber = $_POST["cellNumber"];
$homeNumber = $_POST["homeNumber"];
$email = $_POST["email"];
$paid = $_POST["paid"];
/*
echo "$Id</br>";
echo "$name</br>";
echo "$address</br>";
echo "$cellNumber</br>";
echo "$homeNumber</br>";
echo "$email</br>";
echo "$paid</br>";
*/

$stmt = $conn->prepare("INSERT INTO `Bidder` (`Id`, `Name`, `Address`, `CellNumber`, `HomeNumber`, `Email`, `Paid`) VALUES (?,?,?,?,?,?,?)");

$stmt->bind_param("isssssi", $Id,$name,$address,$cellNumber,$homeNumber,$email,$paid);


$stmt->execute();
$conn->close();
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>