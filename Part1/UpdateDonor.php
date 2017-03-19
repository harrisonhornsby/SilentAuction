<?php
include 'dbconfigSilentAuction.php';
$DonorId = $_GET["ModifiedDonorId"];
$BusinessName = $_POST["businessName"];
$ContactName = $_POST["contactName"];
$ContactEmail = $_POST["contactEmail"];
$ContactTitle = $_POST["contactTitle"];
$Address = $_POST["address"];
$City = $_POST["city"];
$State = $_POST["state"];
$ZipCode = $_POST["zip"];
$TaxReceipt = $_POST["taxReceipt"];

$stmt = $conn->prepare("UPDATE `Donors` SET `BusinessName` = ?, `ContactName` = ?, `ContactEmail` = ?, `ContactTitle` = ?, `Address` = ?, `City` = ?, `State` = ?, `ZipCode` = ?, `TaxReceipt` = ? WHERE `Donors`.`Id` = $DonorId");
$stmt->bind_param("ssssssssi", $BusinessName, $ContactName, $ContactEmail, $ContactTitle, $Address, $City, $State, $ZipCode, $TaxReceipt);

$stmt->execute();
$conn->close();
header("Location: Donors.php");
exit();
?>