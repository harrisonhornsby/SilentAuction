<?php
/**
 * Author: Bryan Moore
 */
include 'dbconfigSilentAuction.php';
/// Should I recursively delete all lots in a category, then delete the category,
/// Or leave it like this where the category will only be deleted when the category contians no lots?
$CategoryId = $_GET["CategoryId"];
  $sql = "DELETE FROM `Category` WHERE Id = $CategoryId";
  $result = $conn->query($sql);
  $conn->close();
header("Location: Category.php");
?>