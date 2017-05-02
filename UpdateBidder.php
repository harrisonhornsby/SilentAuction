<?php
/**
 * Created by PhpStorm.
 * User: harri
 * Date: 3/18/2017
 * Time: 7:47 PM
 */
include 'dbconfigSilentAuction.php';

$BidderId = $_GET["BidderId"];
$Id = $_POST["Id"];
$name = $_POST["name"];
$address = $_POST["address"];
$cellNumber = $_POST["cellNumber"];
$homeNumber = $_POST["homeNumber"];
$email = $_POST["email"];




$stmt = $conn->prepare("UPDATE `Bidder` SET `Id` = ?, `Name` = ?, `Address` = ?, `CellNumber` = ?, `HomeNumber` = ?,`Email` = ? WHERE `Bidder`.`Id` = $BidderId");
$stmt->bind_param("isssss", $Id,$name,$address,$cellNumber,$homeNumber,$email);

$stmt->execute();
$conn->close();

header("Location: Bidders.php");
exit();
?>