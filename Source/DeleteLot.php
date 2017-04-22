<?php
/**
 * Author: Bryan Moore
 */
include 'dbconfigSilentAuction.php';
/// Should I recursively delete all items in a lot, then delete the lot,
/// Or leave it like this where the lot will only be deleted when Lot contians no items?
$ItemId = $_GET["LotId"];
  $sql = "DELETE FROM `Lot` WHERE Id = $ItemId";
  $result = $conn->query($sql);
  $conn->close();
header("Location: Lots.php");
?>