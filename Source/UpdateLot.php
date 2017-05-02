<?php
/**
 * Author: Bryan Moore
 */
include 'dbconfigSilentAuction.php';
$LotId = $_GET["LotId"];
$Description = $_POST["Description"];
$CategoryId = $_POST["CategoryId"];
$WinningBidderId = NULL;
$Delivered = NULL;

 
$stmt = $conn->prepare("UPDATE `Lot` SET `Id` = ?, `Description` = ?, `CategoryId` = ?, `WinningBidderId` = ?, `Delivered` = ? WHERE `Lot`.`Id` = $LotId");
$stmt->bind_param("isiii", $LotId, $Description, $CategoryId, $WinningBidderId, $Delivered);

$stmt->execute();
$conn->close();
header("Location: Lots.php");
exit();
?>