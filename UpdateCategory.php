<?php
/**
 * Author: Bryan Moore
 */
include 'dbconfigSilentAuction.php';
$CategoryId = $_GET["CategoryId"];
$Description = $_POST["Description"];

 
$stmt = $conn->prepare("UPDATE `Category` SET `Id` = ?, `Description` = ? WHERE `Category`.`Id` = $CategoryId");
$stmt->bind_param("is", $CategoryId, $Description);

$stmt->execute();
$conn->close();
header("Location: Category.php");
exit();
?>