<?php
/**
 * Created by PhpStorm.
 * User: harri
 * Date: 3/18/2017
 * Time: 7:47 PM
 */
include 'dbconfigSilentAuction.php';
$ItemId = $_GET["ItemId"];
$RetailValue = $_POST["retailValue"];
$LotId = $_POST["lotId"];
$Description = $_POST["description"];
$DonorId = $_POST["donorId"];

$stmt = $conn->prepare("UPDATE `Items` SET `Id` = ?, `Description` = ?, `RetailValue` = ?, `DonorId` = ?, `LotId` = ? WHERE `Items`.`Id` = $ItemId");
$stmt->bind_param("isdii", $ItemId, $Description, $RetailValue, $DonorId, $LotId);

$stmt->execute();
$conn->close();
header("Location: Items.php");
exit();
?>