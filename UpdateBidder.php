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
$paid = $_POST["paid"];



$stmt = $conn->prepare("UPDATE `Bidder` SET `Id` = ?, `Name` = ?, `Address` = ?, `CellNumber` = ?, `HomeNumber` = ?,`Email` = ?,`Paid` = ? WHERE `Bidder`.`Id` = $BidderId");
$stmt->bind_param("isssssi", $Id,$name,$address,$cellNumber,$homeNumber,$email,$paid);

$stmt->execute();
$conn->close();

header("Location: Bidders.php");
exit();
?>