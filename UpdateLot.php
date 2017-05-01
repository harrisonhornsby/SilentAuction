<?php
/**
 * Author: Bryan Moore
 */
include 'dbconfigSilentAuction.php';
$LotId = $_GET["LotId"];
$Description = $_POST["Description"];
$CategoryId = $_POST["CategoryId"];
$WinningBidderId = $_POST["WinningBidderId"];
$WinningAmount = $_POST["WinningAmount"];
$Paid = $_POST["Paid"];
$Delivered = $_POST["Delivered"];
/*
echo "LotId = $LotId</br>";
echo "Description = $Description</br>";
echo "CategoryId = $CategoryId</br>";
echo "WinningBidder Id = $WinningBidderId</br>";
echo "WinningAmount = $WinningAmount</br>";
echo "Paid = $Paid</br>";
echo "Delivered = $Delivered</br>";

*/
$stmt = $conn->prepare("UPDATE `Lot` SET `Id` = ?, `Description` = ?, `CategoryId` = ?, `WinningBidderId` = ?,`WinningAmount` = ?, `Paid` =?, `Delivered` = ? WHERE `Lot`.`Id` = $LotId");

$stmt->bind_param("isiidss", $LotId, $Description, $CategoryId, $WinningBidderId, $WinningAmount, $Paid, $Delivered);

$stmt->execute();

$conn->close();
header("Location: Lots.php");
exit();
?>